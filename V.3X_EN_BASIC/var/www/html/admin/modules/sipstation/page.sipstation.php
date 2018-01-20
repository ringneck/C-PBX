<?php
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2013 Schmooze Com Inc.
//

require_once(dirname(__FILE__).'/functions.inc/sipstation.inc.php');
$sipstation = new sipstation();

$tabindex       = 0;
$dispnum        = "sipstation";
$error_displays = array();
$action         = isset($_POST['action'])?$_POST['action']:'';
$key_status     = isset($_POST['key_status'])?$_POST['key_status']:'';

$account_key    = isset($_POST['account_key'])?$_POST['account_key']:'';

$remove_key     = isset($_POST['remove_key'])? true : false;

if (isset($_POST['remove_key_del_trunks'])) {
  $action = 'remove_all';
}

switch ($action) {
	case "ajax_get":
	case "refresh_display":
		$action($_POST);
		exit;
	break;

	case "remove_all":  //just delete and re-add
		foreach ($_POST['trunkid'] as $trunk_id) {
			core_trunks_del($trunk_id,'sip');
		}
		$routes = core_routing_list();
		$sql = "SELECT data FROM module_xml WHERE id = 'ss_route'";
		$dat = sql($sql, "getOne");
		if(!empty($dat)) {
			$routes = json_decode($dat,TRUE);
			foreach($routes['outbound_routes'] as $id) {
				//core_routing_delbyid($id);
			}
			//sql("DELETE FROM module_xml WHERE id = 'ss_route'");
		}
		$sipstation->remove_key();
		needreload();
	break;

	case "edit":  //just delete and re-add
		if ($remove_key) {
			$sipstation->remove_key();
			$key_status = 'nokey';
		} elseif ($key_status == 'nokey') {
			// TOOD: provide feedback if they give blank blank key, maybe just js validation?
			$set_key_status = $sipstation->set_key($account_key);
		}
	break;
	default:
}
$status = $sipstation->check_key(); // nokey, valid, invalid, noserver, tempnotavail

$display_data = array(
	'PHP_SELF' => $_SERVER['PHP_SELF'],
	'status' => $status,
	'set_key_status' => isset($set_key_status) ? $set_key_status : '',
	'action' => $action,
	'tabindex' => 1,
);


show_view(dirname(__FILE__).'/views/header.php',$display_data);
switch ($status) { // nokey, valid, invalid, noserver
	case 'nokey': // valid, invalid, noserver
		show_view(dirname(__FILE__).'/views/nokey.php',$display_data);
	break;
	case 'invalid': // nokey
	case 'noserver':
	case 'tempnotavail':
		show_view(dirname(__FILE__).'/views/invalidnoservertempnot.php',$display_data);
	break;
	case 'valid':
		$key = $sipstation->get_key();
		$data = $sipstation->get_config($key);
		if(isset($set_key_status)) {
			$sipstation->add_routes($data['sip_username'],false);
		}
		
		$display_data['sipstation'] = $sipstation;
		$display_data['data'] = $data;
				
		$rs = $sipstation->get_registration_status($data['sip_username']);
		$gw1 = $data['gateways'][0];
		$gw2 = $data['gateways'][1];
		
		$display_data['ip_color'] = 'white';
		$display_data['sip_header'] = '';
		if($sipstation->is_private_ip($data['gateway_info'][$gw1]['contact_ip']) || $sipstation->is_private_ip($data['gateway_info'][$gw2]['contact_ip'])) {
			$display_data['ip_color'] = 'yellow';
			$display_data['sip_header'] = 'warning';
		} elseif(($data['gateway_info'][$gw1]['contact_ip'] != $data['gateway_info'][$gw1]['network_ip']) || ($data['gateway_info'][$gw2]['contact_ip'] != $data['gateway_info'][$gw2]['network_ip'])) {
			$display_data['ip_color'] = 'red';
			$display_data['sip_header'] = 'error';
		}
		
		$display_data['gw1'] = $gw1;
		$display_data['gw2'] = $gw2;
		
		$display_data['gw1_reg'] = $rs[$gw1];
		$display_data['gw2_reg'] = $rs[$gw2];
		
		$display_data['gw1_contactip'] = $data['gateway_info'][$gw1]['contact_ip'];
		$display_data['gw2_contactip'] = $data['gateway_info'][$gw2]['contact_ip'];
		
		$display_data['gw1_networkip'] = $data['gateway_info'][$gw1]['network_ip'];
		$display_data['gw2_networkip'] = $data['gateway_info'][$gw2]['network_ip'];
		
		$display_data['sip_username'] = $data['sip_username'];
		$display_data['sip_password'] = $data['sip_password'];
		$display_data['email'] = $data['email'];
		
		$display_data['gw1_name'] = $data['gateway_info'][$gw1]['name'];
		$display_data['gw2_name'] = $data['gateway_info'][$gw2]['name'];
		
		$display_data['num_trunks'] = $data['num_trunks'];
		
		$display_data['global_failover_num'] = !empty($data['failover_num']) ? $data['failover_num'] : '';
		$display_data['global_failover_dest'] = !empty($data['failover_dest']) ? $data['failover_dest'] : 'Not Set';
		
		$display_data['e911_master'] = $data['e911_master'];
		
	    //sipstation_newroutes_check_and_create();
	    $routes = core_routing_list();
	    $tlist = core_trunks_list(true);
  
	  	$sql = "SELECT data FROM module_xml WHERE id = 'ss_route'";
	  	$dat = sql($sql, "getOne");
	  	$display_data['show_reconfig'] = false;
	  	if(!empty($dat)) {
			$info = json_decode($dat,TRUE);
	  		if(count($info['outbound_routes']) < 3) {
				$display_data['show_reconfig'] = true;
	  		} else {
	  			foreach($info['outbound_routes'] as $k => $id) {
	  				$o = core_routing_get($id);
	  				if(empty($o)) {
	  					$display_data['show_reconfig'] = true;
					}
	  			}
	  		}
	  	} else {
	  		$display_data['show_reconfig'] = true;
	  	}
		
	    $prepend_digits = array();
		$visual_routes = array();
		$i = 0;
		foreach($routes as $route) {
			$visual_routes[$i]['label'] = sprintf("%'03s: %s",$route['seq'],$route['name']);
			$visual_routes[$i]['name']  = $route['name'].$route['route_id'];
			$visual_routes[$i]['id']  = $route['route_id'];
			
			$trunks = core_routing_getroutetrunksbyid($route['route_id']);
			$patterns = core_routing_getroutepatternsbyid($route['route_id']);
			$gw1_checked = '';
			$gw2_checked = '';
			$sip_user = $data['sip_username'];

			$e911_checked = '';
			foreach($patterns as $pattern) {
				if($pattern['match_pattern_pass'] == '911') {
					$e911_checked = 'checked';
				}
			}

			foreach($trunks as $trunknum) {
				$det = core_trunks_getDetails($trunknum);
				$dialrules = core_trunks_get_dialrules($trunknum);

				if($det['tech'] == 'sip' && $det['name'] == "fpbx-1-$sip_user") {
					$visual_routes[$i]['gw1_checked'] = 'checked';
			        if (is_array($dialrules) && count($dialrules)) {
			          foreach ($dialrules as $rule) {
						  if($rule['match_pattern_pass'] == 'NXXXXXX') {
						  	$prepend_digits[] = $rule['prepend_digits'];
						  }
					  }
				  	}
				} elseif($det['tech'] == 'sip' && $det['name'] == "fpbx-2-$sip_user") {
					$visual_routes[$i]['gw2_checked'] = 'checked';
			        if (is_array($dialrules) && count($dialrules)) {
			          foreach ($dialrules as $rule) {
						  if($rule['match_pattern_pass'] == 'NXXXXXX') {
						  	$prepend_digits[] = $rule['prepend_digits'];
						  }
					  }
				  	}
				}		
			}
			$i++;
		}
		
		$display_data['prepend_digits'] = (isset($prepend_digits[0]) && isset($prepend_digits[1]) && ($prepend_digits[0] == $prepend_digits[1])) ? $prepend_digits[0] : '';
		$display_data['routes'] = $visual_routes;
		
		$display_data['dids'] = $data['dids'];
		
		$display_data['e911_list'] = array();
		foreach($data['dids'] as $dids) {
			if(!empty($dids['e911']['name'])) {
				$display_data['e911_list'][] = array(
					"did" => $dids['did'],
					"master" => $dids['e911']['master']
				);
			}
		}
				
		show_view(dirname(__FILE__).'/views/main.php',$display_data);
	break;
} // end switch ($status)
?>
<script>
/*
* This function updates the e911 remotely through our local ajax scripts
*/
function update911(type,did) {
	var didfoptions = { 
	    url:        'config.php?module=sipstation&quietmode=1&file=ajax.html.php&handler=file', 
		type: 		'post',
		dataType: 	'json',
		data: 		{key: "<?php echo $sipstation->get_key()?>", sip_username: "<?php echo isset($data['sip_username']) ? $data['sip_username'] : '' ?>"},
	    success:    function(data) {
			if(data.status) {
				if (typeof data.address != 'undefined') {
					if(data.master) {
						var olddid = $('#default_did').html();
						$('#default_did').html(data.did); //update did on display for e911 master location
						if(olddid != data.did) {
							//Update Our New DID
							$('#sete911master-'+did).hide();
							$('#deletee911-'+did).hide();
							$('#did-color-'+did).css( "color", "green" );
							$('#agreement-span-'+did).hide();
							$('#e911master-'+did).val('yes');
							//now reset old DID
							$('#sete911master-'+olddid).show();
							$('#deletee911-'+olddid).show();
							$('#did-color-'+olddid).css( "color", "orange" );
							$('#agreement-span-'+olddid).show();
							$('#e911master-'+olddid).val('no');
						}
					} else {
						$('#sete911master-'+did).show();
						$('#deletee911-'+did).show();
						$('#agreement-span-'+did).show();
						$('#did-color-'+did).css( "color", "orange" );
					}
					$.each(data.address, function(index, value) {
						if(data.master) {
							$('#'+index).val(value); //update master area only if we are a master DID
						}
						$('#'+index+'-'+data.did).val(value); //update did area
					});
				}
				
				if(type == 'delete') {
					$('#didform-'+did).clearForm();
					$('#did-color-'+did).css( "color", "black" );
					$('#did-name-'+did).html('Set');
					$('#updatee911-'+did).val('Add');
					$('#sete911master-'+did).hide();
					$('#deletee911-'+did).hide();
				    $("[id^=selectecid-]").each(function () {
						var id = $(this).attr('id');
						$("#"+id+" option[value='"+did+"']").remove();
				    });
				} else {
					$('#updatee911-'+did).val('Update');
					$('#did-name-'+did).html('Modify');
				    $("[id^=selectecid-]").each(function () {
						var id = $(this).attr('id');
						var add = true;
						$("#"+id+" option").each(function()
						{
							if($(this).val() == did) {
								add = false;
							}
						});
						if(add) {
							$(this).append('<option value="'+did+'">'+did+'</option>');
						}
				    });
				}
				
				var lab = "<?php echo _("UPDATES") ?>";
				noticeMessage(data.status_message, lab);
			} else {
		        var lab = "<?php echo _("ERROR") ?>";
				errorMessage(data.status_message, lab);
			}
	    }  
	};
	
	didfoptions['data'] = {stype: type, key: "<?php echo $sipstation->get_key()?>", sip_username: "<?php echo isset($data['sip_username']) ? $data['sip_username'] : '' ?>"};
	$('#didform-'+did).ajaxSubmit(didfoptions);
	$("#dialog-"+did).dialog("close");
}

/*
* Get Account Information Button...Button
*/
$("#account-access-button").click(function(){
	getAccountInfo();
	updateStats();
});

/*
* Get Account Information from our ajaxy scripts
*/
function getAccountInfo() {
	var key_status = $("#key_status").val();
    if (key_status != "valid") {
      var msg = "<?php echo _("A valid key is required to perform this action and the server must be available. Error:") ?>" + key_status;
      var lab = "<?php echo _("ERROR") ?>";
      errorMessage(msg, lab);
	  return false;
    }
	$.ajax({
		type: 'POST',
		url: "<?php echo $_SERVER["PHP_SELF"]; ?>",
		data: "display=<?php echo $module_page ?>&action=ajax_get&quietmode=1&restrictmods=core/dashboard",
		dataType: 'json',
		success: function(data) {
			if (data.status == 'success') {
				if(data.message.message != '') {
					if(data.message.type == 'error') {
						errorMessage(data.message.message, '<?php echo _("Message from SIPStation")?>');
					} else {
						noticeMessage(data.message.message, '<?php echo _("Message from SIPStation")?>');
					}
				}
				if(data.trunk_message != '') {
					noticeMessage(data.trunk_message, '<?php echo _("Trunk Updates")?>');
				}
				$("#account-access-button").val("<?php echo _("Refresh Asterisk Account Info")?>");
				for(var member in data) { 
					switch(member) 
					{
					case 'asterisk_registerattempts':
						if(data[member] != 0) {
							$('#asterisk-registerattempts-msg').show();
						} else {
							$('#asterisk-registerattempts-msg').hide();
						}
						break;
					case 'trunk_codecs':
						$.each(data[member], function(key){
							if (this != '') {
								$('#'+member+'_'+key).val(this);
							} else {
								$('#'+member+'_'+key).val("<?php echo _("NO CODECS") ?>").addClass('no_codecs');
							}
						});
						break;
					case 'trunk_id':
						$.each(data[member], function(key){
							if (this != '') {
								$('#trunkid_'+key).val(this);
							}
						});
						break;
					case 'routes':
						$.each(data[member], function(route,trunks){
							$('#'+route+'_id1').prop('checked',trunks.gw1);
							$('#'+route+'_id2').prop('checked',trunks.gw2);
						});
						break;
					}
				}
			} else {
				var lab = "<?php echo _("ERROR") ?>";
				errorMessage(data.status, lab);
			}
		},
		error: function(data) {
			var msg = "<?php echo _("An Error occurred trying to contact the server for account settings.")?>";
			var lab = "<?php echo _("SERVER ERROR") ?>";
			errorMessage(msg, lab);
		}
	});
	return false;
}

/*
* Generate on screen error message box
*/
function errorMessage(message, label) {
	displayMessageBox('<li>'+message+'</li>', label,'sipstation-errors')
}

/*
* Generate on screen notification message box
*/
function noticeMessage(message, label) {
	displayMessageBox('<li>'+message+'</li>', label,'sipstation-messages')
}

/*
* Generate on screen message box
*/
function displayMessageBox(message, label, format) {
	$(".sipstation-msg-box").remove();
	if (label == undefined) {
		label = "<?php echo _("ERROR") ?>";
	}
	var head = '<tr class="sipstation-msg-box"><td colspan="2"><div class="'+format+'"><p>'+ label +'</p><ul>';
	var footer = '</ul></div></td></tr><tr class="sipstation-msg-box"><td></td><td></td></tr><tr class="sipstation-msg-box"><td></td><td></td></tr>';
	$("#sipstation-system-status").after(head + message + footer);
	$("#sipstation-system-status").get(0).scrollIntoView();
}

/*
* Remove message box
*/
function removeMessageBox() {
	$('.sipstation-msg-box').remove();
}

/*
* Timer for status updates
*/
function scheduleStatsUpdate() {
	stats_timer = setTimeout('updateStats();',120000);
}

/*
* Checks Asterisk Registration
*/
function updateAstRegister(member) {
	$.each(member, function(key){
		if (key != 'srv') {
			if (this == 'Registered') {
				$('#asterisk_registry_'+key).addClass('ast-registered-yes').removeClass('ast-registered-no').val(this);
			} else {
				$('#asterisk_registry_'+key).addClass('ast-registered-no').removeClass('ast-registered-yes').val(this);
			}
		}
	});
}

/*
* Update on screen status of servers
*/
function updateStats() {
	var params = '&gw1=<?php echo $data['gateway_info'][$gw1]['name'] ?>&gw2=<?php echo $data['gateway_info'][$gw2]['name'] ?>&sip_username=<?php echo isset($data['sip_username']) ? $data['sip_username'] : '' ?>';
	$.ajax({
		type: 'POST',
		url: "<?php echo $_SERVER["PHP_SELF"]; ?>",
		data: "display=<?php echo $module_page ?>&action=refresh_display&quietmode=1&restrictmods=<?php echo $module_page ?>"+params,
		dataType: 'json',
		success: function(data) {
			if (data.status == 'success') {
				if (data.asterisk_registry != undefined) {
					updateAstRegister(data.asterisk_registry);
				}
				if (data.trunk_qualify != undefined) {
					$.each(data.trunk_qualify, function(key){
						// Change ping status to color coded and don't show misleading ping times
						// since the server gives ping responses a lower priority and these pings are for signaling 
						// and don't reflect the rtp media latencies which go elsewhere but confuse many users who 
						// think these times are represented of QoS and performance which they are not.
						var ping = this.match(/(\d+) ms/i);
						if(ping == null) {
							$('#trunk_qualify_'+key).val(this).css( "background-color", "#ba0000" );
						} else {
							if(ping[1] < 1500) {
								$('#trunk_qualify_'+key).val('OK').css( "background-color", "#00cc00" );
							} else {
								$('#trunk_qualify_'+key).val('OK').css( "background-color", "#eaff33" );
							}
						}
					});
				}
			}
			scheduleStatsUpdate();
		},
		error: function(data) {
			scheduleStatsUpdate();
		}
	});
}

function addRoutes() {
	var dat = {};
	dat.type = "addroutes";
	dat.sip_username = "<?php echo isset($data['sip_username']) ? $data['sip_username'] : '' ?>";
	$.post("config.php?module=sipstation&quietmode=1&file=ajax.html.php&handler=file&restrictmods=core/dashboard/extensionroutes&skip_astman=0", dat,
		function(data){
			if(data.status) {
				var lab = "<?php echo _("UPDATES") ?>";
				noticeMessage(data.status_message+' Page will now reload..', lab);
				location.reload();
			} else {
				var lab = "<?php echo _("ERROR") ?>";
				errorMessage(data.status_message, lab);
			} 
		}, 
	"json");
}

$(function() {
	var set_key_status = $("#set_key_status").val();
	var key_status = $("#key_status").val();
	if (set_key_status != "valid" && set_key_status != '') {
		var msg = "<?php echo _("A valid key is required to perform this action and the server must be available. Error:") ?>" + set_key_status;
		var lab = "<?php echo _("ERROR") ?>";
		errorMessage(msg, lab);
		return false;
	} else if(key_status == 'valid') {
		getAccountInfo();
	}
		
	var options = { 
		url:        'config.php?module=sipstation&quietmode=1&file=ajax.html.php&handler=file&restrictmods=core/dashboard', 
		type: 		'post',
		dataType: 	'json',
		data: 		{key: "<?php echo $sipstation->get_key()?>", sip_username: "<?php echo isset($data['sip_username']) ? $data['sip_username'] : '' ?>"},
		success:    function(data) {
			if(data.status) {
				if (typeof data.address != 'undefined') {
					$.each(data.address, function(index, value) {
					  $('#'+index).val(value); //Update e911 area
					  $('#'+index+'-'+data.did).val(value); //update did area
					});
				}
				var lab = "<?php echo _("UPDATES") ?>";
				noticeMessage(data.status_message, lab);
			} else {
		        var lab = "<?php echo _("ERROR") ?>";
				errorMessage(data.status_message, lab);
			} 
	    }  
	};
	$('#editaccount').submit(function() { 
	    // submit the form
		options.data.default_did = $('#default_did').html();
	    $(this).ajaxSubmit(options);
	    // return false to prevent normal browser submit and page navigation 
	    return false; 
	});
	
	$('#editrt').submit(function() { 
	    // submit the form 
		var dat = {};
		
		dat.key = "<?php echo $sipstation->get_key()?>";
		dat.sip_username = "<?php echo isset($data['sip_username']) ? $data['sip_username'] : '' ?>";
		dat.type = "edittrunk";
		
		dat.form = JSON.stringify($(this).serializeArray());

		$.post("config.php?module=sipstation&quietmode=1&file=ajax.html.php&handler=file&restrictmods=core/dashboard", dat,
			function(data){
				if(data.status) {
					if (typeof data.address != 'undefined') {
						$.each(data.address, function(index, value) {
						  $('#'+index).val(value); //Update e911 area
						  $('#'+index+'-'+data.did).val(value); //update did area
						});
					}
					var lab = "<?php echo _("UPDATES") ?>";
					noticeMessage(data.status_message, lab);
				} else {
			        var lab = "<?php echo _("ERROR") ?>";
					errorMessage(data.status_message, lab);
				} 
		}, "json");

	    // return false to prevent normal browser submit and page navigation 
	    return false; 
	});
	$('#editdid').submit(function() { 
	    // submit the form		
		var dat = {};
		
		dat.key = "<?php echo $sipstation->get_key()?>";
		dat.sip_username = "<?php echo isset($data['sip_username']) ? $data['sip_username'] : '' ?>";
		dat.type = "editdid";
		
		dat.form = JSON.stringify($(this).serializeArray());
		
		$.post("config.php?module=sipstation&quietmode=1&file=ajax.html.php&handler=file&restrictmods=core/dashboard&skip_astman=0", dat,
			function(data){
				if(data.status) {
					if (typeof data.address != 'undefined') {
						$.each(data.address, function(index, value) {
						  $('#'+index).val(value); //Update e911 area
						  $('#'+index+'-'+data.did).val(value); //update did area
						});
					}
					var lab = "<?php echo _("UPDATES") ?>";
					noticeMessage(data.status_message, lab);
				} else {
			        var lab = "<?php echo _("ERROR") ?>";
					errorMessage(data.status_message, lab);
				} 
		}, "json");
		
	    // return false to prevent normal browser submit and page navigation 
	    return false; 
	});
	
    $("#firewall-test-button").click(function(){
      $.ajax({
        type: 'POST',
        url: "<?php echo $_SERVER["PHP_SELF"]; ?>",
        data: "quietmode=1&skip_astman=1&handler=file&module=<?php echo $dispnum ?>&file=firewall.html.php",
        dataType: 'json',
        success: function(data) {
          $(".firewall-test-fields").show();

          $('#firewall_externip').html(data.externip);
          if (data.status == 'success') {
            $('#firewall_status').html("<strong>PASS</strong>");
            $('#firewall_status').addClass('firewall-pass').removeClass('firewall-fail');
            removeMessageBox();
            /*  Iterate through each localnet:netmask pair. Put them into any fields on the form
             *  until we have no more, than create new ones
  			*/
          } else {
            $('#firewall_status').html("<strong>FAIL</strong>");
            $('#firewall_status').addClass('firewall-fail').removeClass('firewall-pass');
            var lab = "<?php echo _("FIREWALL TEST WARNING") ?>";
            errorMessage(data.status_message, lab);
          }
        },
        error: function(data) {
          var msg = "<?php echo _("An Error occurred trying run firewall test")?>";
          var lab = "<?php echo _("FIREWALL TEST ERROR") ?>";
          errorMessage(msg, lab);
        }
      });
      return false;
    });
	
	updateStats();
	//getAccountInfo();
});
</script>
</form>
<?php		
/************ AJAX FUNCTIONS ***********/

function ajax_get($post) {
	include_once("sipstation.html.php");
	return true;
}

function refresh_display($post) {
	require_once(dirname(__FILE__).'/functions.inc/sipstation.inc.php');
	$sipstation = new sipstation();
	include_once("refresh.html.php");
	return true;
}
?>