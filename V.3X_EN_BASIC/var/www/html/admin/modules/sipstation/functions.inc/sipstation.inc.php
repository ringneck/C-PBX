<?php
/* $Id:$ */
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2013 Schmooze Com Inc.
//

require_once(dirname(__FILE__).'/helpers.php');

class sipstation {
	/* hard coded hash of Asterisk codec names compared to what XML official name may send down
	   will be filtered so only supported codecs remain, From Asterisk:

		   1 (1 <<	0)		(0x1)  audio	   g723	  (G.723.1)
		   2 (1 <<	1)		(0x2)  audio		gsm	  (GSM)
		   4 (1 <<	2)		(0x4)  audio	   ulaw	  (G.711 u-law)
		   8 (1 <<	3)		(0x8)  audio	   alaw	  (G.711 A-law)
		  16 (1 <<	4)	   (0x10)  audio   g726aal2	  (G.726 AAL2)
		  32 (1 <<	5)	   (0x20)  audio	  adpcm	  (ADPCM)
		  64 (1 <<	6)	   (0x40)  audio	   slin	  (16 bit Signed Linear PCM)
		 128 (1 <<	7)	   (0x80)  audio	  lpc10	  (LPC10)
		 256 (1 <<	8)	  (0x100)  audio	   g729	  (G.729A)
		 512 (1 <<	9)	  (0x200)  audio	  speex	  (SpeeX)
		1024 (1 << 10)	  (0x400)  audio	   ilbc	  (iLBC)
		2048 (1 << 11)	  (0x800)  audio	   g726	  (G.726 RFC3551)
		4096 (1 << 12)	 (0x1000)  audio	   g722	  (G722)
	*/
	public $sipstation_api_version = '1.0.1';
	public $ast_codec_hash = array(
		'g723'	 => 'G.723.1',
		'gsm'		 => 'GSM',
		'ulaw'	 => 'G.711.U',
		'alaw'	 => 'G.711.A',
		'g722aal2' => 'G.726.AAl2',
		'adpcm'	 => 'ADPCM',
		'slin'	 => 'SLIN', 
		'lpc10'	 => 'LPC10',
		'g729'	 => 'G.729.A',
		'speex'	 => 'SpeeX',
		'ilbc'	 => 'iLBC',
		'g726'	 => 'G.726',
		'g722'	 => 'G.722',
	);
	public $codec_array = array();
	public $remote_configuration = array();
	public $api_url = 'http://push2.schmoozecom.net/sipstation/2';
	public $server_status = 200;
	public $message = null;
	
	/* 
	* callback to filter out codecs not supported
	*/
	function codec_filter($codec) {
		$codec_split = explode(':',$codec,2);
		if (array_key_exists($codec_split[0],$this->ast_codec_hash)) {
			return $codec_split[0];
		} else {
			return false;
		}
	}
	
	function supported_codecs($codec) {
		return in_array($codec,$this->codec_array) ? $codec : false;
	}
	
	/* 
	* Returns a hash of settings from 'sip show peers' 
	*/
	function get_peer_status($peer) {
		global $astman;
		$sip_peer['sipstation_status'] = 'ok';
		$response = $astman->send_request('Command',array('Command'=>"sip show peer $peer"));
		$buf = explode("\n",$response['data']);
		foreach ($buf as $res) {
			if (preg_match("/$peer\s*not\s+found\.{0,1}\s*$/",$res)) {
			  $sip_peer['sipstation_status'] = 'no_peer';
			} elseif (preg_match("/^\s*(.*?)\s*:\s*(.*)$/",$res,$match)) {
			  $sip_peer[$match[1]] = $match[2];
			}
		}
		return $sip_peer;
	}
	
	/* 
	* Returns a hash of settings from 'sip show settings' 
	*/
	function get_sip_settings() {
		global $astman;
		$sip_peer['sipstation_status'] = 'ok';
		$response = $astman->send_request('Command',array('Command'=>"sip show settings"));
		$buf = explode("\n",$response['data']);
		$peer = ''; //Blanking this because someone forgot to actually code it. For cleanup.
		foreach ($buf as $res) {
			if (preg_match("/$peer\s*not\s+found\.{0,1}\s*$/",$res)) {
			  $sip_peer['sipstation_status'] = 'no_peer';
			} elseif (preg_match("/^\s*(.*?)\s*:\s*(.*)$/",$res,$match)) {
			  $sip_peer[$match[1]] = $match[2];
			}
		}
		return $sip_peer;
	}
	
	/* 
	* Returns a filtered array of currently configured codecs, filtered
	* against the list of supported codecs
	*/
	function get_configured_codecs($peer, $peer_status=false) {
		if (!is_array($peer_status) || empty($peer_status)) {
			$peer_status = $this->get_peer_status($peer);
		}
		if ($peer_status['sipstation_status'] = 'ok') {
			if (preg_match("/^\s*\((.*)\)\s*$/",$peer_status['Codec Order'],$match)) {
				$codecs = explode(',',$match[1]);
				return array_filter(array_map(array(&$this,'codec_filter'),$codecs));
			}
		}
	}
	
	/**
	* Get the sipstation token from the database
	*/
	function get_key() {
		$sql = "SELECT * FROM module_xml WHERE id = 'sipstation_key'";
		$result = sql($sql,'getRow',DB_FETCHMODE_ASSOC);
		if (!isset($result['data']) || trim($result['data']) == "") {
			return false;
		} else {
			return trim($result['data']);
		}
	}
	
	/* 
	 * Check if there is a valid key
	 * Returns: nokey, valid, invalid, noserver (if server can't be contacted)
	 */
	function check_key() {
		$sql = "SELECT * FROM `module_xml` WHERE `id` = 'sipstation_key'";
		$result = sql($sql,'getRow',DB_FETCHMODE_ASSOC);

		// if not set so this is a first time install
		// get a new hash to account for first time install
		//
		if (!isset($result['data']) || trim($result['data']) == "") {
			return 'nokey';
		} else {
			// TODO: should really encrypt/decrypt key
			//
			return $this->confirm_key($result['data']);
		}
	}
	
	/* 
	* deleted saved configuration if confirmation determines it is stale
	*/
	function confirm_key($key) {
		$json_array = $this->get_config(trim($key));
		if($this->server_status != 200) { return 'noserver'; }
		if ($json_array['status'] == 'success') {
			switch ($json_array['query_status']) {
			  case 'SUCCESS':
				return 'valid';
			  case 'TEMPNOTAVAIL':
				return 'tempnotavail';
			  case 'BADKEY':
				$this->remove_key();
			  default:
				return 'invalid';
			}
		} else {
			return $json_array['status'];
		}
	}
	
	/*
	* Set sipstation token while also deleting the old token at the same time
	*/
	function set_key($key) {
		global $db;
		$status = $this->confirm_key($key);
		if ($status == 'valid' || $status == 'tempnotavail') {
			$key = trim($key);
			$data4sql = $db->escapeSimple($key);
			sql("DELETE FROM `module_xml` WHERE `id` = 'sipstation_key'");
			sql("INSERT INTO `module_xml` (`id`,`time`,`data`) VALUES ('sipstation_key',".time().",'".$data4sql."')");
		}
		return $status;
	}
	
	/*
	* Remove Key
	*/
	function remove_key() {
		sql("DELETE FROM `module_xml` WHERE `id` = 'sipstation_key'");
		return true;
	}
	
	/* 
	* save the retrieved configuration information into the db to be used to configure trunks and what not
	*/
	function save_config($json) {
		global $db;
		$json = json_encode($json);
		$data4sql = $db->escapeSimple($json);
		sql("DELETE FROM `module_xml` WHERE `id` = 'sipstation_config'");
		sql("INSERT INTO `module_xml` (`id`,`time`,`data`) VALUES ('sipstation_config',".time().",'".$data4sql."')");
	}
	
	/*
	* Delete Saved configuration from database
	*/
	function del_saved_config() {
	  sql("DELETE FROM `module_xml` WHERE `id` = 'sipstation_config'");
	}
	
	/*
	* Retrieve Saved configuration from database
	*/
	function retrieve_saved_config() {
		$sql = "SELECT `data` FROM `module_xml` WHERE `id` = 'sipstation_config'";
		$data = sql($sql, "getOne");
		return json_decode($data,TRUE);
	}
	
	/**
	* Get Remote settings using a key/token
	*/
	function get_settings($key, $online=true) {
		global $amp_conf;

		if(!class_exists('Pest')) {
			require_once(dirname(__FILE__).'/pest/Pest.php');
		}
		if(!class_exists('PestJSON')) {
			require_once(dirname(__FILE__).'/pest/PestJSON.php');
		}
  
		$pest = new PestJSON($this->api_url);
		
		$sql = "SELECT data FROM module_xml WHERE id = 'installid'";
		$uid = sql($sql, "getOne");
  	  	$uid = ($uid) ? $uid : '';
		$mi = module_getinfo('sipstation');
		if ($online) {
			try{
				if(empty($uid)) {
					$json_data = $pest->get('/full/'.$key,array(),array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
				} else {
					$json_data = $pest->get('/full/'.$key.'/'.$uid,array(),array('CLIENT_TYPE' => 'ssmodule-'.$mi['sipstation']['version']));
				}
			} catch (Exception $e) {
				$this->server_status = 500;
				return $this->retrieve_saved_config();
			}
			
			if(json_last_error() == JSON_ERROR_NONE) {
				$this->save_config($json_data); // cache the latest
			} else {
				$this->server_status = 500;
				return $this->retrieve_saved_config();
			}
		
			return $json_data;
		} else {
			return $this->retrieve_saved_config();
		}
	}
	
	function get_or_create_trunks(&$json_array,&$globalvar1,&$trunknum1,&$globalvar2,&$trunknum2) {
		$sip_user = $json_array['sip_username'];
		$sip_pass = $json_array['sip_password'];
		$default_did = $json_array['e911_master']['number'];
		$need_reload = false;

		$tlist = core_trunks_list(true);
		$tech = 'sip';
		$keepcid = 'off';
		$disabletrunk = 'off';
		$ast_codec_hash = $this->ast_codec_hash;

		foreach($ast_codec_hash as $key => $codec) {
			if(!in_array($codec, $json_array['defaultcodecs'])) {
				unset($ast_codec_hash[$key]);
			}
		}		
		
		$peerdetails = "disallow=all\nallow=".implode('&',array_keys($ast_codec_hash))."\n";
		$peer_array = array();
		foreach ($json_array['asterisk_settings']['peer'] as $param) {
			$peerdetails .= trim($param)."\n";
			$parts = explode('=',$param,2);
			$peer_array[$parts[0]] = $parts[1];
		}
  
		$peerdetails .= "username=$sip_user\nsecret=$sip_pass\nhost=";
		$register	 = "$sip_user:$sip_pass@";

		for ($i=1;$i<3;$i++) {
			$gw = $json_array['gateways'][$i-1];
			$gidx = "gw$i";
			$channelid	 = "fpbx-$i-$sip_user";
			$gw			 = $json_array['gateway_info'][$gw]['name'];
	
			if (isset($tlist["SIP/$channelid"])) {
				$globalvar = $tlist["SIP/$channelid"]['globalvar'];
				$trunknum	 = ltrim($globalvar,'OUT_');
				// Now get some trunk status info
				$trunk_status = $this->get_peer_status($channelid);
				if ($trunk_status['sipstation_status'] == 'ok') {
					$json_array['trunk_qualify'][$gidx] = $trunk_status['Status'];
					$json_array['trunk_codecs'][$gidx] = implode(' | ',$this->get_configured_codecs($channelid,$trunk_status));
				}
				$trunk_details = core_trunks_getDetails($trunknum);
				$json_array['trunk_name'][$gidx] = $trunk_details['name'];
				$oldPeer = trim(core_trunks_getTrunkPeerDetails($trunknum));
				$updateTrunks = false;
				$newPeer = $peerdetails.$gw;
				$newRegister = $register.$gw;
				
				$old_peer = array();
				foreach (explode("\n",$oldPeer) as $elem) {
					$temp = explode("=",$elem,2);
					if ($temp[0] == 'allow') {
						$old_peer[$temp[0]] = explode('&',$temp[1]);
					} elseif ($temp[0] != '') {
						$old_peer[$temp[0]] = $temp[1];
					}
				}
				
				if (isset($old_peer['allow'])) {
					unset($old_peer['allow']);
				}

				if (isset($old_peer['disallow'])) {
					unset($old_peer['disallow']);
				}

				unset($peer_array['qualify']);
				if (isset($old_peer['qualify'])) {
					unset($old_peer['qualify']);
				}
				unset($peer_array['qualify']);

				if (isset($old_peer['context'])) {
					unset($old_peer['context']);
				}
				unset($peer_array['context']);

				if (isset($old_peer['qualifyfreq'])) {
					unset($old_peer['qualifyfreq']);
				}
				
				if (isset($old_peer['dtmfmode'])) {
					switch($old_peer['dtmfmode']) {
						case 'inband':
						case 'rfc2833':
						case 'auto':
							unset($old_peer['dtmfmode']);
							unset($peer_array['dtmfmode']);
					break;
					}
				}
				$peer_array['username'] = $sip_user;
				$peer_array['password'] = $sip_pass;
				$peer_array['host'] = $gw;
				
				$changed = '';
				foreach($peer_array as $key => $value) {
					if(!empty($old_peer[$key]) && $old_peer[$key] != $value) {
						$newPeer = preg_replace('/'.$key.'='.$old_peer[$key].'/i',$key.'='.$value,$newPeer);
						$updateTrunks = true;
						$changed .= ' '.$key.',';
					}
				}

				$oldRegister = trim(core_trunks_getTrunkRegister($trunknum));
				if($oldRegister != trim($newRegister)) {
					$updateTrunks = true;
					$changed .= ' registration string,';
				}
				if($updateTrunks) {
					core_trunks_edit($trunknum, 
						$trunk_details['channelid'], 
						'', 
						'', 
						$trunk_details['outcid'], 
						$newPeer, 
						'', 
						'', 
						$newRegister, 
						$trunk_details['keepcid'], 
						$trunk_details['failscript'], 
						$trunk_details['disabled'], 
						$trunk_details['name'], 
						$trunk_details['provider'], 
						$trunk_details['continue'], 
						$trunk_details['dialopts']);
					$this->message = _('Remote trunk settings have been changed ('.$changed.'). Please hit Apply Config to apply the new settings');
					$need_reload = true;
				}
			} else {
				$trunknum = core_trunks_add($tech, $channelid, '', '', $default_did, $peerdetails.$gw, '', '', $register.$gw, $keepcid, '', $disabletrunk);
				$globalvar = "OUT_".$trunknum;
				$need_reload = true;
				$json_array['created_trunks'][$gidx] = $channelid;
				$json_array['trunk_name'][$gidx] = "SIP/$channelid";
				$this->message = _('Added New Trunks. Please hit Apply Config to apply the new settings');
			}
			// We need these next and need them past back up
			$gv = "globalvar$i";
			$tn = "trunknum$i";
			$$gv = $globalvar;
			$$tn = $trunknum;
		}

		$peer_array['username'] = $sip_user;
		$peer_array['secret'] = $sip_pass;

		$trunk_check = array($trunknum1, $trunknum2);
		$cnt = 1;
		foreach ($trunk_check as $tr) {
			$gw1 = $json_array['gateways'][$cnt-1];
			$json_array['trunk_id']["gw$cnt"] = $tr; // need to get this set for both anyhow
			$gw = $json_array['gateway_info'][$gw1]['name'];
			$peer_array['host'] = $gw;
			$peer_stuff = array();
			$tr_reg = core_trunks_getTrunkRegister($tr);
			foreach (explode("\n",core_trunks_getTrunkPeerDetails($tr)) as $elem) {
				$temp = explode("=",$elem,2);
				if ($temp[0] == 'allow') {
					$peer_stuff[$temp[0]] = explode('&',$temp[1]);
				} elseif ($temp[0] != '') {
					$peer_stuff[$temp[0]] = $temp[1];
				}
			}
			// Unset some settings that do not hurt to change and might help
			if (isset($peer_stuff['allow'])) {
				unset($peer_stuff['allow']);
			}

			if (isset($peer_stuff['disallow'])) {
				unset($peer_stuff['disallow']);
			}

			if (isset($peer_stuff['qualify'])) {
				unset($peer_stuff['qualify']);
			}
			unset($peer_array['qualify']);

			if (isset($peer_stuff['context'])) {
				unset($peer_stuff['context']);
			}
			unset($peer_array['context']);

			if (isset($peer_stuff['qualifyfreq'])) {
				unset($peer_stuff['qualifyfreq']);
			}

			if (isset($peer_stuff['dtmfmode'])) {
				switch($peer_stuff['dtmfmode']) {
					case 'inband':
					case 'rfc2833':
					case 'auto':
						unset($peer_stuff['dtmfmode']);
						unset($peer_array['dtmfmode']);
					break;
				}
			}
			
			if ($peer_array != $peer_stuff || $tr_reg != $register.$gw) {
				$json_array['changed_trunks']["gw$cnt"] = $tr;
			}
			$cnt++;
		}
		return $need_reload;
	}
	
	/*
	Current format of 'sip show registry' with various possible states
	Host							Username	   Refresh State				Reg.Time				 
	trunk1.freepbx.com:5060			b04c1dsr		   585 Registered			Sat, 27 Jun 2009 00:33:47
	trunk2.freepbx.com:5060			b04c1dsr		   585 Registered			Sat, 27 Jun 2009 00:33:48
	phonebooth.bandwidth.com:5060	9192221234		   585 Timeout				Sat, 27 Jun 2009 00:33:47
	67.131.62.22:5060				myusername		   585 Auth.Sent.			Sat, 27 Jun 2009 00:33:47
	*/
	function get_registration_status($sip_user) {
		global $astman;
		$status_arr = array();
		if (!isset($astman)) {
			return $status_arr;
		}
		$response = $astman->send_request('Command',array('Command'=>"sip show registry"));
		$buf = explode("\n",$response['data']);
		$state_pos = false;
		foreach ($buf as $line) {
			if (trim($line) != '') {
				if ($state_pos===false) {
					// find the positions of the header columns so we can parse
					if ($state_pos = strpos($line,"State")) {
						$user_pos = strpos($line,"Username");
						$reg_pos = strpos($line,"Reg.Time");
						$host_pos = strpos($line,"Host");

						// Asterisk 1.2 does not have Reg. Time
						if ($reg_pos === false) {
							$reg_pos = strlen($line);
						}
					}
				} else {
					// get the username and if ours, trunk (host) and State of reg
					preg_match("/^([^\s]+)\s*/",substr($line,$user_pos),$matches);
					if (isset($matches[1]) && ($sip_user == $matches[1])) {
						$trunk = trim(substr($line,$host_pos,($user_pos-$host_pos)));
						$trunk = preg_match("/^([^\s:]+)[:]{0,1}[\d]{0,5}\s*/",$trunk,$matches) ?	 $matches[1] : $trunk;;
						$state = trim(substr($line,$state_pos,($reg_pos-$state_pos)));
						$status_arr[$trunk] = $state;
					}
				}
			}
		}
		return $status_arr;
	}
	
	/* 
	* Very simple function to determine if an IP address is in the private range. This would
	* include:
	* 192.168.*.*, 172.16-31.*.* and 10.*.*.*
	*/
	function is_private_ip($address) {
		if (preg_match('/^(192|172|10)\.(\d{1,3})\.\d{1,3}\.\d{1,3}$/',$address,$match)) {
			switch($match[1]) {
				case '10':
					return true;
				break;
				case '192':
					if ($match[2] == '168') {
						return true;
					} else {
						return false;
					}
				break;
				case '172':
					if ($match[2] >= 16 && $match[2] <= 31) {
						return true;
					} else {
						return false;
					}
				break;
			}
		} else {
			return false;
		}
	}
	
	function add_routes($sip_user,$assign_trunks=true,$check_previous=true) {
		$sql = "SELECT data FROM module_xml WHERE id = 'ss_route'";
		$dat = sql($sql, "getOne");
		
		if($check_previous && count(core_routing_list())) {
			return false;
		}
		
		$tlist = core_trunks_list(true);
		if ($assign_trunks && isset($tlist["SIP/fpbx-1-$sip_user"]) && isset($tlist["SIP/fpbx-2-$sip_user"])) {
			$fpbx_gw1  = ltrim($tlist["SIP/fpbx-1-$sip_user"]['globalvar'],'OUT_');
			$fpbx_gw2  = ltrim($tlist["SIP/fpbx-2-$sip_user"]['globalvar'],'OUT_');
		} else {
			$fpbx_gw1 = '';
			$fpbx_gw2 = '';
		}
		
		// Setup Common Parameters
		//
		$outcid = '';
		$outcid_mode = '';
		$routepass = '';
		$intracompany = '';
		$mohsilence = 'default';
		$time_group_id = '';
		$trunkpriority = array($fpbx_gw1, $fpbx_gw2);
		$dest = '';
				
		//E911 Setup Start
		$e911_route = array(
			'routename' => 'E911-Leave-First',
			'emergency' => 'YES'
		);

		$e911_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '911', 
			'match_cid' => ''
		);
		$e911_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '1', 
			'match_pattern_pass' => '911', 
			'match_cid' => ''
		);
		$e911_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '91', 
			'match_pattern_pass' => '911', 
			'match_cid' => ''
		);
		$e911_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '9', 
			'match_pattern_pass' => '911', 
			'match_cid' => ''
		);
		$e911_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '933', 
			'match_cid' => ''
		);
		$e911_route['seq'] = '0';
		//E911 Setup End
		
		//Outbound Setup Start
		$out_route = array(
			'routename' => 'SIPStation-Out',
			'emergency' => ''
		);

		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => 'NXXXXXX', 
			'match_cid' => ''
		);
		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => 'NXXNXXXXXX', 
			'match_cid' => ''
		);
		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '1800NXXXXXX', 
			'match_cid' => ''
		);
		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '1888NXXXXXX', 
			'match_cid' => ''
		);
		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '1877NXXXXXX', 
			'match_cid' => ''
		);
		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '1866NXXXXXX', 
			'match_cid' => ''
		);
		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '1855NXXXXXX', 
			'match_cid' => ''
		);
		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '1844NXXXXXX', 
			'match_cid' => ''
		);
		$out_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '1NXXNXXXXXX', 
			'match_cid' => ''
		);
		$out_route['seq'] = '1';
		//outbound Setup End
		
		//International Setup Start
		$int_route = array(
			'routename' => 'SIPStation-INT',
			'emergency' => ''
		);
		$int_route['patterns'][] = array(
			'prepend_digits' => '+', 
			'match_pattern_prefix' => '011', 
			'match_pattern_pass' => 'NXX.', 
			'match_cid' => ''
		);
		$int_route['patterns'][] = array(
			'prepend_digits' => '', 
			'match_pattern_prefix' => '', 
			'match_pattern_pass' => '+NXX.', 
			'match_cid' => ''
		);
		$int_route['seq'] = 'bottom';
		//Internation Setup End
		
		$cnt = 0;
		
		if(!empty($dat)) {
			$info = json_decode($dat,TRUE);			
			$routes = core_routing_list();
			$e911_id = isset($info['outbound_routes']['e911']) ? $info['outbound_routes']['e911'] : '';
			$int_id = isset($info['outbound_routes']['international']) ? $info['outbound_routes']['international'] : '';
			$out_id = isset($info['outbound_routes']['outbound']) ? $info['outbound_routes']['outbound'] : '';
			$allowed_routes = array(); //for extension routing module
			
			//Add E911 Routes
			$e911_info = core_routing_get($e911_id);
			if(empty($e911_info)) {
				$cnt++;
				$e911_id = core_routing_addbyid($e911_route['routename'], $outcid, $outcid_mode, $routepass, $e911_route['emergency'], $intracompany, $mohsilence, $time_group_id, $e911_route['patterns'], $trunkpriority, $e911_route['seq'], $dest);
				$allowed_routes[] = $e911_id; //for extension routing module
			} else {
				//Check if there are trunks defined and fix if we need to do so
				$tks = core_routing_getroutetrunksbyid($e911_id);
				if(empty($tks[0]) || empty($tks[1])) {
					core_routing_updatetrunks($e911_id, $trunkpriority, true);
				}
			}
			
			//Add International Routes
			$int_info = core_routing_get($int_id);
			if(empty($int_info)) {
				$cnt++;
				$int_id = core_routing_addbyid($int_route['routename'], $outcid, $outcid_mode, $routepass, $int_route['emergency'], $intracompany, $mohsilence, $time_group_id, $int_route['patterns'], $trunkpriority, $int_route['seq'], $dest);					
				$allowed_routes[] = $int_id; //for extension routing module
			} else {
				//Check if there are trunks defined and fix if we need to do so
				$tks = core_routing_getroutetrunksbyid($int_id);
				if(empty($tks[0]) || empty($tks[1])) {
					core_routing_updatetrunks($int_id, $trunkpriority, true);
				}
			}
			
			//Add Outbound Routes
			$out_info = core_routing_get($out_id);
			if(empty($out_info)) {
				$cnt++;
				$out_id = core_routing_addbyid($out_route['routename'], $outcid, $outcid_mode, $routepass, $out_route['emergency'], $intracompany, $mohsilence, $time_group_id, $out_route['patterns'], $trunkpriority, $out_route['seq'], $dest);					
				$allowed_routes[] = $out_id; //for extension routing module
			} else {
				//Check if there are trunks defined and fix if we need to do so
				$tks = core_routing_getroutetrunksbyid($out_id);
				if(empty($tks[0]) || empty($tks[1])) {
					core_routing_updatetrunks($out_id, $trunkpriority, true);
				}
			}
			
			//for extension routing module
			if(function_exists('extensionroutes_edit_user') && !empty($allowed_routes)) {				
				$exts = core_users_list(true);
				foreach($exts as $ext) {
					$routes = extensionroutes_get_routes($ext[0]);
					$final_routes = array_merge($allowed_routes,$routes);
					extensionroutes_edit_user($ext[0], $final_routes);
				}
			}
		} else {
			$cnt + 3;
			//Add All of the routes
			$e911_id = core_routing_addbyid($e911_route['routename'], $outcid, $outcid_mode, $routepass, $e911_route['emergency'], $intracompany, $mohsilence, $time_group_id, $e911_route['patterns'], $trunkpriority, $e911_route['seq'], $dest);
			$int_id = core_routing_addbyid($int_route['routename'], $outcid, $outcid_mode, $routepass, $int_route['emergency'], $intracompany, $mohsilence, $time_group_id, $int_route['patterns'], $trunkpriority, $int_route['seq'], $dest);					
			$out_id = core_routing_addbyid($out_route['routename'], $outcid, $outcid_mode, $routepass, $out_route['emergency'], $intracompany, $mohsilence, $time_group_id, $out_route['patterns'], $trunkpriority, $out_route['seq'], $dest);					
			
			//for extension routing module
			$allowed_routes = array($e911_id,$int_id,$out_id);
			if(function_exists('extensionroutes_edit_user')) {
				$exts = core_users_list(true);
				foreach($exts as $ext) {
					$routes = extensionroutes_get_routes($ext[0]);
					$final_routes = array_merge($allowed_routes,$routes);
					extensionroutes_edit_user($ext[0], $final_routes);
				}
			}
		}
		
		$save = array(
			"outbound_routes" => array(
				"e911" => $e911_id,
				"international"	=>	$int_id,
				"outbound"	=>	$out_id
			)
		);
		
		$j = json_encode($save);
		
		$sql = "REPLACE INTO module_xml (id, data) VALUES ('ss_route', '".$j."')";
		sql($sql);
		
		return array(
			$e911_id => core_routing_getroutetrunksbyid($e911_id),
			$int_id => core_routing_getroutetrunksbyid($int_id),
			$out_id => core_routing_getroutetrunksbyid($out_id)
		);
	}
	
	function set_outboundcid($user, $cid, $type) {
		global $db;
		global $astman;
		
		$device_updates = array();
		if($type == 'ecid') {
			/*Start set device Emergency CID */
			$user = $db->escapeSimple($user); // not reall necessary but ...
			$devices = sql("SELECT `id`, `emergency_cid` FROM `devices` WHERE `user` = '$user'", 'getAll', DB_FETCHMODE_ASSOC);

			foreach ($devices as $d) {
				if ($astman) {
				  	$astman->database_put("DEVICE",$d['id']."/emergency_cid","$cid");
				} else {
					freepbx_debug("could not get to manager to update emergency CID");
				}
				sql("UPDATE `devices` SET `emergency_cid` = '$cid' WHERE `id` = '{$d['id']}'");
				$device_updates[] = $d['id'];
			}
			/*End set device Emergency CID */
		} elseif($type == 'cid') {
			/*Start set user CID */
			$uvars = core_users_get($user);
			$uvars['outboundcid'] = $cid;
			core_users_edit($user, $uvars);
			/*End set user CID */
		}

		return $device_updates;
	}
	
	/* 
	* Parse remote configuration parameters. We prevent multiple calls to this function and our remote API with the local storage of remote_configuration
	*/
	function get_config($account_key, $online=true, $filter_sections=array()) {
		if(!empty($this->remote_configuration)) {
			return $this->remote_configuration;
		}
		
		if (!empty($account_key)) {
			$json_array = array();
			$json_data = $this->get_settings($account_key, $online);

			if(isset($json_data['version']) && ($json_data['version'] == $this->sipstation_api_version)) {
				if (!empty($json_data)) foreach ($json_data as $key => $value) {
					switch ($key) {
						case 'defaultcodecs':
							foreach($value as $svalue) {
								$json_array['defaultcodecs'][] = $svalue;
							}
							break;
						case 'message':
							foreach($value as $skey => $svalue) {
								switch($skey) {
									case 'type':
									case 'message':
										if (!empty($filter_sections) && (!isset($filter_sections[$skey]) || !$filter_sections[$skey])) { continue; }
										$json_array['message'][$skey] = trim("$svalue");
										break;
								}
							}
							break;
						case 'sip_info':
							foreach($value as $skey => $svalue) {
								switch($skey) {
									case 'sip_username':
									case 'sip_password':
										if (!empty($filter_sections) && (!isset($filter_sections[$skey]) || !$filter_sections[$skey])) { continue; }
										$json_array[$skey] = trim("$svalue");
										break;
								}
							}
							break;
						case 'customer_info':
							foreach($value as $skey => $svalue) {
								switch($skey) {
									case 'monthly_cost':
									case 'num_trunks':
									case 'email':
									case 'failover_num':
									case 'failover_dest':
										if (!empty($filter_sections) && (!isset($filter_sections[$skey]) || !$filter_sections[$skey])) { continue; }
										$json_array[$skey] = trim("$svalue");
										break;
								}
							}
							break;
						case 'version':
						case 'query_status':
						case 'query_status_message':
						case 'cid_format':
							if (!empty($filter_sections) && (!isset($filter_sections[$key]) || !$filter_sections[$key])) { continue; }
							$json_array[$key] = trim("$value");
							break;
						case 'nat_troubleshooting':
							if (!empty($filter_sections) && (!isset($filter_sections[$key]) || !$filter_sections[$key])) { continue; }
							$json_array[$key] = trim("$value");
							break;
						case 'gateways':
							foreach ($value as $gws) {
								$json_array['gateways'][] = $gws;
							}
							break;
						case 'gateway_info':
							if (!empty($filter_sections) && (!isset($filter_sections[$key]) || !$filter_sections[$key])) { continue; }
							foreach ($value as $gw => $value2) {
								if(!$value2['client_status']['registered']) {
									$json_array[$key][$gw]['registered'] = false;
									$json_array[$key][$gw]['name'] = $value2['name'];
								} else {
									$json_array[$key][$gw]['name'] = $value2['name'];
									foreach($value2['client_status'] as $key4 => $value4) {
										$json_array[$key][$gw][$key4] = $value4 ? trim($value4) : '';
									}
									if (isset($value2['client_status']['contact_ip']) && isset($value2['client_status']['network_ip']) && ($value2['client_status']['contact_ip'] == $value2['client_status']['network_ip'])) {
										$json_array[$key][$gw]['ips_match'] = 'yes';
									} else {
										$json_array[$key][$gw]['ips_match'] = $this->is_private_ip($value2['client_status']['contact_ip']) ? 'private' : 'no';
									}
								}
							}
							break;
						case 'dids':
							if (!empty($filter_sections) && (!isset($filter_sections[$key]) || !$filter_sections[$key])) { continue; }
							foreach ($value as $did_info) {
								$did = trim($did_info['number']);
								$failover = $did_info['failover'];
								$e911 = $did_info['e911_address'];
								$e911['street2'] = isset($e911['street2']) ? $e911['street2'] : '';
								if(isset($did_info['e911_address']['master']) && $did_info['e911_address']['master']) {
									$json_array['e911_master'] = $did_info['e911_address'];
									$json_array['e911_master']['number'] = $did;
								}
								$exten = core_did_get($did);
								$key = 'dids';
								if (empty($exten)) {
									$json_array[$key][] = array('did' => $did, 'destination' => '', 'description' => '', 'failover' => $failover, 'e911' => $e911, 'cid' => '', 'ecid' => '');
								} else {
									$setcid = '';
									if(preg_match('/from-did-direct,(.*),/',$exten['destination'],$matches)) {
										$dvars = core_devices_get($matches[1]);
										$uvars = core_users_get($matches[1]);
										$cid = !empty($uvars['outboundcid']) ? $uvars['outboundcid'] : '';
										$ecid = !empty($dvars['emergency_cid']) ? $dvars['emergency_cid'] : '';
									}
									$json_array[$key][] = array('did' => $did, 'destination' => $exten['destination'], 'description' => $exten['description'], 'failover' => $failover, 'e911' => $e911, 'cid' => $cid, 'ecid' => $ecid);
								}
					  		}
					  	  break;
					  case 'asterisk_settings':
					  	if (!empty($filter_sections) && (!isset($filter_sections[$key]) || !$filter_sections[$key])) { continue; }
						$json_array['asterisk_settings']['peer'] = $value['peer']['settings'];
						break;
					case 'codecs':
						if (!empty($filter_sections) && (!isset($filter_sections[$key]) || !$filter_sections[$key])) { continue; }
						/* TODO: This section does nothing */
						$this->codec_array = $value['codec'];
					
						/* filter the Asterisk codec hash to only those that we are told are supported
						*/
						$this->ast_codec_hash = array_filter(array_map(array(&$this,'supported_codecs'),$this->ast_codec_hash));
						break;
					default:
				}
					$json_array['status'] = 'success';
				} else {
					$json_array['status'] = 'noserver';
				}
			} else {
				$json_array['status'] = 'outdated';
			}
		} else {
		  $json_array['status'] = 'nokey';
		}
		$this->remote_configuration = $json_array;
		return $json_array;
	}
	
}