<?php
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2013 Schmooze Com Inc.
//


$json = array(
	"status_message" => "Nothing",
	"status" => false
);

require_once(dirname(__FILE__).'/sipstation.inc.php');
if(!class_exists('Pest')) {
	//TODO: We should be using pest json here.
	require_once(dirname(__FILE__).'/pest/Pest.php');
}

$sipstation = new sipstation();
$pest = new Pest($sipstation->api_url);

$mi = module_getinfo('sipstation');

switch($_POST['type']) {
	case "editaccount":
		if(isset($_POST['key'])) {
			$data1 = array(
				"address1" => $_POST['address1'],
				"address2" => $_POST['address2'],
				"state" => $_POST['state'],
				"city" => $_POST['city'],
				"zip" => $_POST['zip'],
				"name" => $_POST['name']
			);
			$did = $_POST['default_did'];
			$key = $_POST['key'];
			try{
				$json_data = $pest->post('/e911/'.$did.'/'.$key,$data1,array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
			} catch (Exception $e) {
				$d = json_decode($e->getMessage(),true);
				$json['status'] = false;
				$json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $d['message'] . ')';
				break;
			}
			
			$e911_status = json_decode($json_data,true);
			
			if(!$e911_status['status']) {
	  		  $json['status'] = false;
			  $json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $e911_status['message'] . ')';;
			  break;
		  	}
			
			if(!empty($_POST['global_failover']) && $_POST['global_failover'] != $_POST['global_failover_old']) {
				$data1 = array(
					"num" => $_POST['global_failover']
				);
				try{
					$json_data = $pest->post('/failover/'.$key,$data1,array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
				} catch (Exception $e) {
					$d = json_decode($e->getMessage(),true);
					$json['status'] = false;
					$json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $d['message'] . ')';
					break;
				}
				
				$status = json_decode($json_data,true);
				
				if(!$status['status']) {
		  		  $json['status'] = false;
				  $json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $status['message'] . ')';
				  break;
			  	}

			} elseif(empty($_POST['global_failover']) && ($_POST['global_failover'] != $_POST['global_failover_old'])) {
				$key = $_POST['key'];
				try{
					$json_data = $pest->delete('/failover/'.$key,array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
				} catch (Exception $e) {
					$d = json_decode($e->getMessage(),true);
					$json['status'] = false;
					$json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $d['message'] . ')';
					break;
				}
				
				$status = json_decode($json_data,true);
				
				if(!$status['status']) {
		  		  $json['status'] = false;
				  $json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $status['message'] . ')';
				  break;
			  	}
				
			}

			$json = $e911_status;
			$json['status'] = true;
			$json['data'] = $data1;
			$json['status_message'] = _('Updated Master E911.') . ' ' . _('You may have to wait up to 15 minutes for your changes to take effect. It is your responsibility to test and confirm your E911 Address. You do this by dialing 933 and transmitting this number as the Caller ID and the address will be read back to you from the E911 center.');
			$json['did'] = $did;
		} else {
			$json['status_message'] = _('No Key');
		}
		break;
	case "addroutes":
		$cnt = 0;
		$sip_user = $_POST['sip_username'];
		$cnt = $sipstation->add_routes($sip_user,true,false);
		
		if(!$cnt === FALSE) {
			needreload();
			$json['show_reload'] = 'yes';
			$json['status'] = true;
			$json['status_message'] = _('Added Routes');
		} else {
			$json['status'] = true;
			$json['status_message'] = _('Nothing Changed');
		}
		
		break;
	case "edittrunk":		
		$form = array();
		foreach(json_decode($_POST['form'],true) as $elements) {
			$k = $elements['name'];
			$v = $elements['value'];
			
			if(preg_match('/\[\]$/',$k)) {
				$k = str_replace('[]','',$k);
				$_POST[$k][] = $v;
			} else {
				$_POST[$k] = $v;
			}
		}
		unset($_POST['form']);
		
		$json['status'] = 'success';
		$cnt = 0;
		$need_reload = false;
		$tlist = core_trunks_list(true);

		/* TODO: should I pass in all the info to make the trunk here? Really it should
		         alredy be made at this point and this is just a sanity check.
		   TODO: In any event need to pass in enough info to configure dialpatterns for
		         enabling 7 digit dialing
		*/

		$sip_user = $_POST['sip_username'];
		if (isset($tlist["SIP/fpbx-1-$sip_user"]) && isset($tlist["SIP/fpbx-2-$sip_user"])) {
			$globalvar1 = $tlist["SIP/fpbx-1-$sip_user"]['globalvar'];
			$trunknum1  = ltrim($globalvar1,'OUT_');

			$globalvar2 = $tlist["SIP/fpbx-2-$sip_user"]['globalvar'];
			$trunknum2  = ltrim($globalvar2,'OUT_');

			// Check if we need to add dialrules
			//
			if (isset($_POST['areacode']) && trim($_POST['areacode']) != "") {

			    /* We are adding a prefix, make sure it is 3 digits, then grab what's there
			       rip it out if it is in there, push it on top and if the two differ, update
			       if replacing, the old one will be further down and be dumped as a duplicate
			    */
			    $areacode = preg_replace("/[^0-9]/" ,"",trim($_POST['areacode']));
				if (strlen($areacode) == 3) {
					foreach (array($trunknum1,$trunknum2) as $trunk) {
						$dialrules = core_trunks_get_dialrules($trunk);
						if (is_array($dialrules) && count($dialrules)) {
							foreach ($dialrules as $rule) {
								$match   = $rule['match_pattern_pass'];
								$prefix  = $rule['match_pattern_prefix'];
								$prepend = $rule['prepend_digits'];

								$dialrules_tmp[] = array('match_pattern_prefix' => $prefix, 'match_pattern_pass' => $match, 'prepend_digits' => $prepend);
								if ($match != 'NXXXXXX' || $prepend != $areacode || $prefix != '') {
									$dialrules_2[] = array('match_pattern_prefix' => $prefix, 'match_pattern_pass' => $match, 'prepend_digits' => $prepend);
								} else {
									$dialrules_2 = array();
								}
							}
						} else {
							$dialrules_2 = array();
							$dialrules_tmp = array();
						}
	
						array_unshift($dialrules_2, array('match_pattern_prefix' => '', 'match_pattern_pass' => 'NXXXXXX', 'prepend_digits' => $areacode));
        
						if ($dialrules_2 != $dialrules_tmp) {
							core_trunks_update_dialrules($trunk, $dialrules_2, true);
							$need_reload = true;
						}
						unset($dialrules_2);
					    unset($dialrules_tmp);
						unset($dialrules);
					}
				} else {
					$json['areacode_status'] = sprintf(_("The prefix you entered, %s, is not a proper prefix or the wrong length. It should be a 3 digit prefix."),$_POST['areacode']);
				}
			}

			$routes = core_routing_list();
			foreach($routes as $route) {
				$route_name = $route['name'].$route['route_id'];
				$trunks = core_routing_getroutetrunksbyid($route['route_id']);
	
				$gw1 = array_search($trunknum1,$trunks);
				$gw2 = array_search($trunknum2,$trunks);
				$gw1_change = isset($_POST[$route_name.'_id1']) ? ($gw1 !== false XOR $_POST[$route_name.'_id1'] == 'yes') : false;
				$gw2_change = isset($_POST[$route_name.'_id2']) ? ($gw2 !== false XOR $_POST[$route_name.'_id2'] == 'yes') : false;
				
				if ($gw1_change || $gw2_change) {
					/*
					Determine which one or both need to change then do them at the same time.
					They should all be created at this point from above, gw1 should be last
					so that trunk always ends up first.
					*/
					$cnt++;
					if ($gw2_change) {
						if ($gw2===false) {
							array_unshift($trunks,$trunknum2);
						} else {
							unset($trunks[$gw2]);
						}
					}
					if ($gw1_change) {
						if ($gw1===false) {
							array_unshift($trunks,$trunknum1);
						} else {
							unset($trunks[$gw1]);
						}
					}
					foreach ($trunks as $trunk) {
						$new_trunks[] = $trunk;
					}
					// Now get all the route settings, then update with these new trunks
					core_routing_updatetrunks($route['route_id'], $new_trunks, true);
					unset($new_trunks);
				} else {
					//This is where we would remove trunks
				}
			}
			$json['update_count'] = $cnt;
			if ($cnt) {
				$json['status_message'] = sprintf(_("Successfully configured %s routes to use your SIP trunks"),$cnt);
			} elseif ($need_reload) {
				$json['status_message'] = sprintf(_("Your Area Code was updated to %s"),$areacode);
			} else {
				$json['status_message'] = _("No updates were required, no routes or areacode were changed");
			}
		} else {
			$json['update_count'] = 0;
			$json['status_message'] = sprintf(_("Your trunks are not configured. Click on the Get Account Info button in order to re-pull your account information and generate the required trunks and then try again."));
		}

		/*
		  if we made changes then we have to set the needsreload status and send back the reload bar to be inserted
		*/
		if ($cnt || $need_reload) {
			needreload();
			$json['show_reload'] = 'yes';
		} else {
			$json['show_reload'] = 'no';
		}
	break;
	case "getextinfo":
		$ext = $_POST['ext']; 
		$uvars = core_users_get($ext);
		$devices = sql("SELECT `id`, `emergency_cid` FROM `devices` WHERE `user` = '$ext'", 'getAll', DB_FETCHMODE_ASSOC);
		if(count($devices) > 1) {
			$json['emergency_cid'] = '';
		} else {
			$json['emergency_cid'] = $devices[0]['emergency_cid'];
		}
		$json['outboundcid'] = $uvars['outboundcid'];
		$json['status'] = true;
	break;
	case "editdid":
		$form = array();
		foreach(json_decode($_POST['form'],true) as $elements) {
			$k = $elements['name'];
			$v = $elements['value'];
			
			if(preg_match('/\[\]$/',$k)) {
				$k = str_replace('[]','',$k);
				$form[$k][] = $v;
			} else {
				$form[$k] = $v;
			}
		}

		foreach($form['dids'] as $dids) {
			$did_list[$dids] = array(
				'did' => $dids,
				'description' => $form['description_'.$dids],
				'failover' => $form['failover_'.$dids],
				'failover_old' => $form['failover_old_'.$dids],
				'destination' => !empty($form['goto'.$dids]) ? $form[$form['goto'.$dids].$dids] : '',
				'setcid' => !empty($form['setcid_'.$dids]) ? $form['setcid_'.$dids] : '',
				'selectecid' => !empty($form['setcid_'.$dids]) && !empty($form['selectecid_'.$dids]) ? $form['selectecid_'.$dids] : '',
			);
		}
								
		$did_cnt = 0;
		$dids_validation_fail = array();
		$did_failover = array();
		foreach($did_list as $did) {
			//Quickly check the Set CID Values
			if(preg_match('/from-did-direct,(.*),/',$did['destination'],$matches)){
				$ext = $matches[1];
				$uvars = core_users_get($ext);				
				//If set cid is checked then lets go through and attempt to set the emergency CID and the outbound CID.
				if(($did['setcid'] != 'unchanged') && ($did['setcid'] != 'none')) {
					if($uvars['outboundcid'] != $did['setcid']) {
						$sipstation->set_outboundcid($ext,$did['setcid'],'cid');
						needreload();
					}
				//If set cid is NOT checked then lets go through and attempt to unset the outbound CID.
				} elseif($did['setcid'] == 'none') {
					$sipstation->set_outboundcid($ext,'','cid');
					needreload();
				}
				
				//Go Through and Set the ECIDs
				if(($did['selectecid'] != 'unchanged') && ($did['selectecid'] != 'none')) {
					$devices = sql("SELECT `id`, `emergency_cid` FROM `devices` WHERE `user` = '$ext'", 'getAll', DB_FETCHMODE_ASSOC);
					foreach($devices as $d) {
						if($d['emergency_cid'] != $did['selectecid']) {
							$sipstation->set_outboundcid($d['id'],$did['selectecid'],'ecid');
							needreload();
						}
					}
				} elseif($did['selectecid'] == 'none') {
					//unset the ECID here
					$devices = sql("SELECT `id`, `emergency_cid` FROM `devices` WHERE `user` = '$ext'", 'getAll', DB_FETCHMODE_ASSOC);
					foreach($devices as $d) {
						$sipstation->set_outboundcid($d['id'],'','ecid');
						needreload();
					}
				}
			}
			
			if(!empty($did['destination'])) {
				$did_vars = array(
					'extension' => $did['did'],
					'cidnum' => '',
					'destination' => $did['destination'],
					'description' => $did['description']
				);
				core_did_create_update($did_vars);
				$did_cnt++;
			} elseif(core_did_get($did['did'])) {
				core_did_del($did['did'],'');
			}
			
			if(!empty($did['failover']) && $did['failover'] != $did['failover_old']) {
				$data1 = array(
					"num" => $did['failover']
				);
				$key = $_POST['key'];
				try{
					$json_data = $pest->post('/failover/'.$did['did'].'/'.$key,$data1,array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
				} catch (Exception $e) {
					$d = json_decode($e->getMessage(),true);
					$json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $d['message'] . ')';
				}
				$j = json_decode($json_data,true);
				if(!$j['status']) {
					$dids_validation_fail[] = $did['did'];
				}
				$did_failover++;
			} elseif(empty($did['failover']) && ($did['failover'] != $did['failover_old'])) {
				$key = $_POST['key'];
				try{
					$json_data = $pest->delete('/failover/'.$did['did'].'/'.$key,array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
				} catch (Exception $e) {
					$d = json_decode($e->getMessage(),true);
					$json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $d['message'] . ')';
				}
				$j = json_decode($json_data,true);
				if(!$j['status']) {
					$dids_validation_fail[] = $did['did'];
				}
				$did_failover++;
			}
		}
		
		$json['status'] = true;
		
		if (empty($dids_validation_fail) && $did_cnt) {
		  $json['update_count'] = $did_cnt;
		  $json['status_message'] = sprintf(_("Successfully updated or created %s inbound routes for your DIDs"),$did_cnt);
  		} elseif (!$did_cnt && $did_failover) {
  		  $json['update_count'] = $did_cnt;
  		  $json['status_message'] = sprintf(_("Successfully updated or set failover for your %s DIDs"),$did_failover);
		} elseif(!empty($dids_validation_fail)) {
		  $json['status'] = false;
		  $json['update_count'] = 0;
		  $json['validation_failures'] = $dids_validation_fail;
		  $json['status_message'] = sprintf(_("There were %s validation failures on the requested DIDs, no updates performed"),$validation_failures);
		} else {
		  $json['status'] = false;
  		  $json['status_message'] = _("Nothing was changed");
		}

		/*
		  if we made changes then we have to set the needsreload status and send back the reload bar to be inserted
		*/
		if ($did_cnt) {
		  needreload();
		  $json['show_reload'] = 'yes';
		} else {
		  $json['show_reload'] = 'no';
		}
	break;
	case "updatee911":
		$master = 0;
		switch($_POST['stype']) {
			case 'master':
				$master = 1;
			case 'update':
				$did = $_POST['didmaster'];
				if($_POST['e911master'] == 'no' && (!isset($_POST['agreement-'.$did]) || $_POST['agreement-'.$did] != 'on')) {
					$json['status'] = false;
					$json['status_message'] = _('You did not agree to our charges and policies on E911');
					break;
				}
				$array = array(
					"name" => $_POST['name-'.$did],
					"address1" => $_POST['address1-'.$did],
					"address2" => $_POST['address2-'.$did],
					"city" => $_POST['city-'.$did],
					"state" => $_POST['state-'.$did],
					"zip" => $_POST['zip-'.$did]
				);
				$array['master'] = isset($master) ? $master : 0;
				try {
					$thing = $pest->post('/e911/'.$_POST['didmaster'].'/'.$_POST['key'],$array,array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
				} catch (Exception $e) {
					$json['status'] = false;
					$json['status_message'] = _('Remote Server Error. Please try again in 10 minutes. If you continue to have problems please contact support and give them this error code').':(' .$e->getMessage() . ')';
					break;
				}
				$status = json_decode($thing,true);
				if(!$status['status']) {
		  		  $json['status'] = false;
				  $json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $status['message'] . ')';
				} else {
					$json = $status;
					$json['status'] = true;
					$json['status_message'] = _('Updated E911 information for').' '.$_POST['didmaster'].'. '._('You may have to wait up to 15 minutes for your changes to take effect. It is your responsibility to test and confirm your E911 Address. You do this by dialing 933 and transmitting this number as the Caller ID and the address will be read back to you from the E911 center.').'<br/>'._('To check your E911 settings please dial 933');
					$json['did'] = $did;
					$json['address'] = $array;
				}
			break;
			case 'delete':
				try {
					$thing = $pest->delete('/e911/'.$_POST['didmaster'].'/'.$_POST['key'],array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
				} catch (Exception $e) {
					$json['status'] = false;
					$json['status_message'] = _('Remote Server Error. Please try again in 10 minutes. If you continue to have problems please contact support and give them this error code').':('.$e->getMessage().')';
					break;
				}
				$status = json_decode($thing,true);
				if(!$status['status']) {
					$json['status'] = false;
					$json['status_message'] = _('Remote Server Error. Please try again in 10 minutes, If you continue to have problems please contact support and give them this error code') . ':(' . $status['message'] . ')';
					break;
				} else {
					$json['status'] = true;
					$json['status_message'] = _('Deleted E911 information for').' '.$_POST['didmaster'];
				}
			break;
		}
	break;
}
header("Content-type: application/json"); 
echo json_encode($json);
