			<tr class="account_access_section">
				<td colspan="2">
					<small><?php echo sprintf(_("To disable account access, click %s. To update account information, click %s. If port forwarding is configured on your firewall/router, you can test it with the %s button. 
							Port forwarding can provide more reliable service and better quality and we recommend setting it up. 
							The test sends a packet to an unused Asterisk RTP port at your WAN address and results in a PASS if the packet is properly received."),
							 "<i>"._("Remove Key")."</i>","<i>"._("Update Account Info")."</i>","<i>"._("Run Firewall Test")."</i>") ?></small><br /><br />
							 <small><?php echo sprintf(_("Questions or Issues can be directed to our %s at %s"),'<a href="http://support.schmoozecom.com" target="_sipstationsupport" title="Schmoozecom Support">Support Center</a>',
							'<a href="http://support.schmoozecom.com" target="_sipstationsupport" title="Schmoozecom Support">http://support.schmoozecom.com</a>')?></small><br/><br/>
				</td>
			</tr>
			<tr class="account_access_section">
				<td colspan="2">
					<input type="submit" name="remove_key" id="remove_key" value="<?php echo _("Remove Key")?>" tabindex="<?php echo ++$tabindex;?>" />&nbsp;
					<input type="submit" name="remove_key_del_trunks" id="remove_key_del_trunks"  value="<?php echo _("Remove Key & Delete Trunks")?>" tabindex="<?php echo ++$tabindex;?>" />&nbsp;
					<input type="button" id="account-access-button"  value="<?php echo _("Refresh Asterisk Account Info")?>" tabindex="<?php echo ++$tabindex;?>" />&nbsp;
					<input type="button" id="firewall-test-button"  value="<?php echo _("Run Firewall Test")?>" tabindex="<?php echo ++$tabindex;?>" />&nbsp;
				</td>
			</tr>
		</form>
		<tr class="firewall-test" id="sipstation-system-status">
			<td colspan="2"><h5><?php echo _("System Status") ?><hr></h5></td>
		</tr>

		<tr class="account-settings">
			<td><a href="#" class="info"><?php echo _("Trunk Status")?><span><?php echo _("Provides Gateway Side and Client side realtime status information on your trunks and SIP registrations. More details on the tooltips below.")?></span></a></td>
			<td class="asterisk-register-fields">
				<table width="100%">
					<tr>
						<td width="50%" align="center">
							<?php echo _("Primary") ?>
						</td>
						<td width="50%" align="center">
							<?php echo _("Secondary") ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="account-settings">
			<td><a href="#" class="info"><?php echo _("Asterisk Registration Status")?><span><?php echo _("Realtime Status of Registration as reported by Asterisk on your local system.")?></span></a></td>
			<td class="asterisk-register-fields">
				<table width="100%">
					<tr>
						<td width="50%" align="center">
							<input type="text" readonly="readonly" size="24" id="asterisk_registry_gw1" name="asterisk_registry_gw1" style="background-color:<?php echo $gw1_reg == 'Registered' ? '#00cc00' : 'red' ?>;" value="<?php echo $gw1_reg ?>">
						</td>
						<td width="50%" align="center">
							<input type="text" readonly="readonly" size="24" id="asterisk_registry_gw2" name="asterisk_registry_gw2" style="background-color:<?php echo $gw2_reg == 'Registered' ? '#00cc00' : 'red' ?>;" value="<?php echo $gw2_reg ?>" >
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr id="asterisk-registerattempts-msg" style="display:none;">
			<td></td>
			<td class="warning-messages">
				<?php echo sprintf(_("Warning: The Asterisk configuration: %s, is set wrong. Change this to 0 to continually retry registrations until successful. You can use the Asterisk SIP Settings module to set this."),"registerattempts") ?>
			</td>
		</tr>

		<tr class="account-settings">
			<td><a href="#" class="info"><?php echo _("Your Contact IP")?><span><?php echo _("This is the contact IP as seen on the gateway and provides warnings if errors are detected. These two addresses SHOULD be your external IP as seen on the WAN side of your router. If they are not, or if they do not match your Network IP, you should configure your NAT settings in the Asterisk SIP Settings module")?></span></a></td>
			<td>
				<table width="100%">
					<tr>
						<td width="50%" align="center">
							<input type="text" style="background-color:<?php echo $ip_color ?>" readonly="readonly" size="24" id="contact_ip_gw1" name="contact_ip_gw1" class="register-fields-gw1" value="<?php echo !empty($gw1_contactip) ? $gw1_contactip : _('Not Available')?>">
						</td>
						<td width="50%" align="center">
							<input type="text" style="background-color:<?php echo $ip_color ?>" readonly="readonly" size="24" id="contact_ip_gw2" name="contact_ip_gw2" class="register-fields-gw2" value="<?php echo !empty($gw2_contactip) ? $gw2_contactip : _('Not Available') ?>">
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr class="account-settings">
			<td><a href="#" class="info"><?php echo _("Your Network IP")?><span><?php echo _("This is the network IP as seen on the gateway and provides warnings if errors are detected. These two addresses SHOULD be your external IP as seen on the WAN side of your router. If they are not, or if they do not match your Network IP, you should configure your NAT settings in the Asterisk SIP Settings module")?></span></a></td>
			<td>
				<table width="100%">
					<tr>
						<td width="50%" align="center">
							<input type="text" style="background-color:<?php echo $ip_color ?>" readonly="readonly" size="24" id="network_ip_gw1" name="network_ip_gw1" class="register-fields-gw1" value="<?php echo !empty($gw1_networkip) ? $gw1_networkip : _('Not Available') ?>">
						</td>
						<td width="50%" align="center">
							<input type="text" style="background-color:<?php echo $ip_color ?>" readonly="readonly" size="24" id="network_ip_gw2" name="network_ip_gw2" class="register-fields-gw2" value="<?php echo !empty($gw2_networkip) ? $gw2_networkip : _('Not Available') ?>" >
						</td>
					</tr>
				</table>
			</td>
		</tr>
		
	    <?php if($sip_header == 'warning') {?>
			<tr class="gateway-reginfo-msg" id="gateway-private-msg">
				<td colspan="2" class="warning-messages">
					<?php echo _("Warning: The SIP Contact header is not set to your WAN IP. It is set to your internal private IP behind NAT. The gateway will attempt to decipher your proper address but your configuration is incorrect. You should review the NAT settings in the Asterisk SIP Settings module, or sip_nat.conf if not using that module.") ?>
				</td>
			</tr>
		<?php } elseif($sip_header == 'error') {?>
			<tr class="gateway-reginfo-msg" id="gateway-broken-msg">
				<td colspan="2" class="warning-messages">
					<?php echo _("ERROR: Your SIP Contact header is a non-private IP address that does not match your network IP. Your system will probably fail typically resulting in one way audio issues. This is usually caused because of an externip setting that is not the same as you WAN IP, or an externhost setting with dynamic DNS information that is not updated. You should check the Asterisk SIP Settings Module or your sip_nat.conf file for the proper settings.") ?>
				</td>
			</tr>
		<?php } ?>

		<tr class="account-settings">
			<td><a href="#" class="info"><?php echo _("SIP Ping")?><span><?php echo _("Roundtrip signaling delay to SIP server as determined by the Asterisk 'qualify' command. This is only signaling delay. The voice connections (RTP media streams) are routed from your system to the closest POP (point of presence) where the call enters the PSTN. This assures the optimal minimum latency but can't be reported because it's dependent on each call.")?></span></a></td>
			<td class="asterisk-qualify-fields">
				<table width="100%">
					<tr>
						<td width="50%" align="center">
							<input type="text" readonly="readonly" size="24" id="trunk_qualify_gw1" name="trunk_qualify_gw1" value="<?php echo _("Not Available") ?>">
						</td>
						<td width="50%" align="center">
							<input type="text" readonly="readonly" size="24" id="trunk_qualify_gw2" name="trunk_qualify_gw2" value="<?php echo _("Not Available") ?>" >
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="account-settings">
			<td><a href="#" class="info"><?php echo _("Codec Priorities")?><span><?php echo _("Codec Priority Asterisk reports for these trunks. This is filtered to only show codecs supported by the gateways. The Codecs can be edited on the trunk page to make changes to priority or available codecs.")?></span></a></td>
			<td class="asterisk-codec-fields">
				<table width="100%">
					<tr>
						<td width="50%" align="center">
							<input type="text" readonly="readonly" size="24" id="trunk_codecs_gw1" name="trunk_codecs_gw1" value="<?php echo _("Not Available") ?>">
						</td>
						<td width="50%" align="center">
							<input type="text" readonly="readonly" size="24" id="trunk_codecs_gw2" name="trunk_codecs_gw2" value="<?php echo _("Not Available") ?>" >
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr class="firewall-test-fields">
			<td>
				<a href="#" class="info"><?php echo _("Firewall Test")?><span><?php echo sprintf(_("Status result of Firewall Test. If %s, it means we successfully received the RTP packet that was sent from the remote server. If %s, it means the packet sent from the remote server was blocked by your firewall or lost in the Internet. You can retry the test."),_("PASS"),_("FAIL"))?></span></a>
			</td>
			<td>
				<table width="100%">
					<tr>
						<td width="50%" align="center">
							<small><b><?php echo _("Status") ?>&nbsp;</b>: <span id="firewall_status">N/A</span></small>
						</td>
						<td width="50%" align="center">
							<small><b><?php echo _("External IP") ?>&nbsp;</b>: <span id="firewall_externip">N/A</span></small>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr class="guielToggle" data-toggle_class="account_summary_section">
			<td colspan="2">
				<h5>
					<span class="guielToggleBut">-  </span>
					<?php echo _("Account Settings") ?>
					<hr>
				</h5>
			</td>
		</tr>
	</table>
	<form autocomplete="off" id="editaccount" name="editaccount" action="" method="post">
	<input type="hidden" value="editaccount" name="type">
	<table width="80%">
		<tr class="account-settings account_summary_section">
			<td><a href="#" class="info"><?php echo _("Credentials")?><span><?php echo _("The SIP Username and Password (secret) for this account along with the associated email address to log into the SIPStation store. You can change the password in the SIPStation portal at https://store.freepbx.com")?></span></a></td>
				<td>
					<table width="80%">
						<tr>
							<td>
								<small><b><?php echo _("SIP Username:") ?> </b><span id="sip_username"><?php echo $sip_username ?></span></small>
							</td>
							<td>
								<small><b><?php echo _("SIP Password:") ?> </b><span id="sip_password"><?php echo $sip_password ?></span></small>
							</td>
							<td>
								<small><b><?php echo _("Email Address:") ?> </b><span id="sip_password"><?php echo $email ?></span></small>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr class="account-settings account_summary_section">
				<td><a href="#" class="info"><?php echo _("Gateways")?><span><?php echo _("Primary and Secondary servers to send SIP traffic to. These are used in the automatic trunk configuration.")?></span></a></td>
				<td>
					<table width="50%">
						<tr>
							<td>
								<small><b><?php echo _("Primary") ?>:&nbsp;</b><span id="gw1"><?php echo $gw1_name ?></span></small>
							</td>
							<td>
								<small><b><?php echo _("Secondary") ?>:&nbsp;</b><span id="gw2"><?php echo $gw2_name ?></span></small>
							</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr class="account-settings account_summary_section">
				<td><a href="#" class="info"><?php echo _("Service Information")?><span><?php echo _("The number of concurrent calls that have been purchased and are configured for your service. Sometimes called trunks and similar to the number of PRI channels or POTS lines in a traditional telco environment.")?></span></a></td>
				<td>
					<table width="100%">
						<tr>
							<td>
								<small><b><?php echo _("Channels") ?>:&nbsp;</b><span id="num_trunks"><?php echo $num_trunks ?></span></small>
							</td>
						</tr>
					</table>
				</td>
			</tr>

			<tr class="account_summary_section">
				<td><br /></td>
			</tr>
		
			<tr class="account_summary_section">
				<td><a href="#" class="info"><?php echo _("Account Services")?><span><?php echo _("Here you can set the global failover number for all of your associated DIDs if your Asterisk server is unable to connect to SIPStation")?></span></a></td>
				<td>
					<table width="100%">
						<tr>
							<td><input id="global_failover_old" name="global_failover_old" type="hidden" value="<?php echo $global_failover_num ?>">
								<small><b><?php echo _("Global Failover Number") ?>:&nbsp;</b><input id="global_failover" name="global_failover" type="text" value="<?php echo $global_failover_num ?>" size"10"></small>
							</td>
						</tr>
						<tr>
							<td>
								<small><b><?php echo _("Global Failover IP/FQDN") ?>:&nbsp;</b><?php echo $global_failover_dest ?></small>
							</td>
						</tr>
					</table>
				</td>

			</tr>
			<tr class="account_summary_section">
				<td><br /></td>
			</tr>

			<tr class="e911-location e911_default_did account_summary_section">
				<td><a href="#" class="info"><?php echo _("E911 Master Location")?><span><?php echo _("This is your primary E911 address. It must be a valid US or Canadian address and must be setup to user this service. You are responsible for the accuracy of this information as well as confirming that the E911 service is working. You can configure and dial 933 transmitted to any of the SIPStation trunks to validate the address.") . "<br />" . _("When you call 911 on a SIPStation trunk, it will ignore any Caller ID you send if that number has not been explicitly enabled for E911 service and transmit this Caller ID instead. This will result in the E911 operator seeing this Caller ID as a call back number and this address when they are properly equipped to receive address information which is usually the case") . "<br />" . _("You can enable other SIPStation DIDs with E911 if you have additional addresses you want associated with other DIDs, or if you explicitly want the E911 operator to see those numbers as call back numbers vs. this number. Each additional E911 enabled DID incurs a small monthly fee. You can also choose a different DID to be the Master E911 DID by first enabling it and then setting it as the Master. Each change incurs a small fee and then each DID that is explicitly E911 enabled will incur a small monthly fee except this Master E911 DID which is included with your service cost.")?></span></a></td>
				<td>
					<small><b><?php echo _("E911 Caller ID") ?>:&nbsp;</b><span id="default_did"><?php echo $e911_master['number'] ?></span></small>
				</td>
			</tr>

			<tr class="e911-location e911_name account_summary_section">
				<td></td>
				<td>
					<small><b><?php echo _("Name") ?>:&nbsp;</b></small><input type="text" size="50" id="name" name="name" value="<?php echo $e911_master['name'] ?>">
				</td>
			</tr>

			<tr class="e911-location e911_street1 account_summary_section">
				<td></td>
				<td>
					<small><b><?php echo _("Address 1") ?>:&nbsp;</b></small><input type="text" size="50" id="address1" name="address1" value="<?php echo $e911_master['street1'] ?>">
				</td>
			</tr>

			<tr class="e911-location e911_street2 account_summary_section">
				<td></td>
				<td>
					<small><b><?php echo _("Address 2") ?>:&nbsp;</b></small><input type="text" size="50" id="address2" name="address2" value="<?php echo $e911_master['street2'] ?>">
				</td>
			</tr>

			<tr class="e911-location e911_city e911_state e911_zip account_summary_section">
				<td></td>
				<td>
					<small><b><?php echo _("City") ?>:&nbsp;</b></small><input type="text" size="25" id="city" name="city" value="<?php echo $e911_master['city'] ?>">&nbsp;
					<small><b><?php echo _("State") ?>:&nbsp;</b></small><input type="text" size="3" id="state" name="state" value="<?php echo $e911_master['state'] ?>">&nbsp;
					<small><b><?php echo _("Zip") ?>:&nbsp;</b></small><input type="text" size="8" id="zip" name="zip" value="<?php echo $e911_master['zip'] ?>">
				</td>
			</tr>

			<tr id="account-button" class="account-settings account_summary_section">
				<td colspan="4"><br \>
					<input type="submit" id="account-submit-button"  value="<?php echo _("Update Account Settings")?>" tabindex="<?php echo ++$tabindex;?>" />
				</td>
			</tr>
		</table>
	</form>

		<form autocomplete="off" id="editrt" name="editrt" action="" method="post">
			<table width="80%" id="trunk_routes_section_table">
				<tr class="guielToggle" data-toggle_class="trunk_routes_section">
					<td colspan="2">
						<h5>
							<span class="guielToggleBut">-  </span>
							<a href="#" class="info"><?php echo _("Route and Trunk Configuration") ?><span><?php echo _("Check/Uncheck the boxes and submit to add/remove this service as the primary trunks to any listed route. Both gateways should be configured to allow for redundancy. If gateways are already configured in the route, the box will be checked, even if they are not the primary trunks for that route. Click on the route name to link directly to the Outbound Routes page for any route.<br />An Area Code can be set to enable 7 digit dialing for any route configured to pass 7 digits.") ?></span></a>
							<hr>
						</h5>
					</td>
				</tr>
				<tr class="account-settings trunk-routes trunk_routes_section">
					<td colspan="2">
						<small><?php echo sprintf(_("Check Primary (%s) and Secondary (%s) Trunk for each route that should be configured with the %s service. The trunks will be inserted into the corresponding routes upon clicking the %s button. You can enable 7 digit dialing with the trunk by entering your area code as well."),"<i>gw1</i>","<i>gw2</i>","SIPStation","<i>"._("Update Route/Trunk Configurations")."</i>") ?></small><br /><br />
					</td>
				</tr>
			</table>
			<table>
				<tr class="account-settings trunk-routes trunk_routes_section">
					<td>
						<a href="#" class="info"><?php echo _("Area Code")?><span><?php echo _("Provide your 3 digit area code if you would like your trunks to allow 7 digit dialing and automatically prepend your area code. This requires the route to be configured to send a 7 digit number.")?></span></a>
					</td>
					<td>
						<input type="text" maxlength="3" size="4" id="areacode" name="areacode" value="<?php echo $prepend_digits ?>">
					</td>
				</tr>
			</table>
	  
			<table class="alt_table">
				<tr class="trunk_routes_section">
					<th>Route Name</th>
					<th>Gateways</th>
				</tr>
				<tr class="trunk_routes_section trunk-routes trunk_routes_section"><td></td><tr>
				<?php foreach($routes as $route) { ?>
					<tr class="account-settings trunk-routes trunk_routes_section">
					  <td id="<?php echo $route['name'].'-lab'?>"><a href="<?php echo $_SERVER['PHP_SELF'].'?display=routing&extdisplay='.$route['id'] ?>" title="<?php echo sprintf(_("Edit: %s"),$route['label']) ?>"><?php echo $route['label'] ?></a></td>
					  <td>
						  <input type="checkbox" value="yes" name="<?php echo $route['name'].'_id1' ?>" id="<?php echo $route['name'].'_id1' ?>" class="route-checkbox <?php echo $route['name'].'_id2' ?>" tabindex="<?php echo $tabindex++ ?>" <?php echo !empty($route['gw1_checked']) ? $route['gw1_checked'] : ''?>/>
						  <label for="<?php echo $route['name'].'_id1' ?>"> <small>gw1</small> </label>
						  <input type="checkbox" value="yes" name="<?php echo $route['name'].'_id2' ?>" id="<?php echo $route['name'].'_id2' ?>" class="route-checkbox <?php echo $route['name'].'_id1' ?>" tabindex="<?php echo $tabindex++ ?>" <?php echo !empty($route['gw2_checked']) ? $route['gw2_checked'] : ''?>/>
						  <label for="<?php echo $route['name'].'_id2' ?>"> <small>gw2</small> </label>
					  </td>
					</tr>
				<?php } ?>
			</table>
			<table width="80%">
				<tr id="route-button" class="account-settings trunk_routes_section">
					<td colspan="2"><br \>
						<input type="hidden" name="type" value="edittrunk">
						<input type="submit" id="route-submit-button"  value="<?php echo _("Update Route/Trunk Configurations")?>" tabindex="<?php echo ++$tabindex;?>" />
						<?php if($show_reconfig) {?><input type="button" value="<?php echo _("Add Default SIPStation Routes")?>" tabindex="<?php echo ++$tabindex;?>" onclick="addRoutes()"/><?php } ?>
					</td>
				</tr>
			</table>
		</form>
		<form autocomplete="off" id="editdid" name="editdid" action="" method="post">
			<input type="hidden" name="type" value="editdid">
			<table width="80%" class="alt_table">
				<tr class="guielToggle" data-toggle_class="did_section">
					<td colspan="2">
						<h5>
							<span class="guielToggleBut">-  </span>
							<a href="#" class="info"><?php echo _("DID Configuration") ?>
								<span><?php echo _("Here you can manage your DIDs<br>Specifically you can do the follow: ") ?>
									<ul>
										<li><strong><?php echo _("DID"); ?>:</strong> <?php echo _("Your DID, Clicking here will take you to the inbound route setup for this DID")?></li>
										<li><strong><?php echo _("Set E911"); ?>:</strong> <?php echo _("Set and manage your per DID E911 Addresses (Fees Apply for Multiple E911 Addresses)")?></li>
										<li><strong><?php echo _("Failover Number"); ?>:</strong> <?php echo _("Set and manage your per DID Failover Numbers")?></li>
										<li><strong><?php echo _("Description"); ?>:</strong> <?php echo _("Set A Description for the Inbound Routes Page")?></li>
										<li><strong><?php echo _("Route To"); ?>:</strong> <?php echo _("Route Your DID to a specified location")?></li>
										<li><strong><?php echo _("Set CID"); ?>:</strong> <?php echo _("Automatically set the CID of the Extension to the DID if this DID is routed to an extension")?></li>
										<li><strong><?php echo _("Set ECID"); ?>:</strong> <?php echo _("Set the Emergency CID of the Extension to an E911 enabled DID")?></li>
									</ul>
								</span>
							</a>
							<hr>
						</h5>
					</td>
				</tr>
				<tr class="account-settings did_section">
					<th><?php echo _("DID") ?></th>
					<th><?php echo _("Set E911") ?></th>
					<th><?php echo _("Failover Num") ?></th>
					<th><?php echo _("Description") ?></th>
					<th><?php echo _("Route To") ?></th>
					<th><?php echo _("Set CID") ?></th>
					<th><?php echo _("Emergency CID") ?></th>
				</tr>
				<?php foreach($dids as $did) { ?>
					<input type="hidden" name="dids[]" value="<?php echo $did['did']?>">
					<input type="hidden" name="failover_old_<?php echo $did['did']?>" value="<?php echo $did['failover']['num'] ?>">
					<tr class="account-settings did_section">
						<td><a href="config.php?display=did&amp;extdisplay=<?php echo $did['did']; ?>" id="did-color-<?php echo $did['did']?>" style="color:<?php echo !empty($did['e911']['name']) ? ($did['e911']['master'] ? 'green' : 'orange') : 'black' ?>"><?php echo $did['did'] ?></a></td>
						<td><a href="#" id="did-name-<?php echo $did['did']?>" onclick="$( '#dialog-<?php echo $did['did']?>' ).dialog( 'open' );return false;"><?php echo (isset($did['e911']['name']) && !empty($did['e911']['name'])) ? 'Modify' : 'Set'?></a></td>
						<td><input type="text" szie="10" max="10" name="failover_<?php echo $did['did']?>" maxlength="10" value ="<?php echo $did['failover']['num'] ?>"></td>
						<td><input type="text" name="description_<?php echo $did['did']?>" value ="<?php echo $did['description'] ?>"></td>
						<td><?php echo drawselects($did['destination'], $did['did'], false, false)?></td>
						<td>
							<select id="setcid-<?php echo $did['did']?>" name="setcid_<?php echo $did['did']?>" style="<?php if(!preg_match('/from-did-direct/',$did['destination'])) {?>display:none;<?php } ?>">
								<option value="unchanged">Unchanged</option>
								<option value="none" <?php echo empty($did['cid']) ? 'selected' : '' ?>>None</option>
								<?php foreach($dids as $subdid) { ?>
									<option value="<?php echo $subdid['did']?>" <?php echo ($subdid['did'] == $did['cid']) ? 'selected' : ''?>><?php echo $subdid['did']?></option>
								<?php } ?>
							</select>
						</td>
						<td>
							<select id="selectecid-<?php echo $did['did']?>" name="selectecid_<?php echo $did['did']?>" style="<?php if(!preg_match('/from-did-direct/',$did['destination'])) {?>display:none;<?php } ?>">
								<option value="unchanged">Unchanged</option>
								<option value="none" <?php echo empty($did['ecid']) ? 'selected' : '' ?>>None</option>
								<?php foreach($e911_list as $list) {?>
									<option value="<?php echo $list['did']?>" <?php echo ($list['did'] == $did['ecid']) ? 'selected' : ''?>><?php echo $list['did']?></option>
								<?php } ?>
						  	</select>
						</td>
					</tr>
				<?php } ?>
			</table>
			<input class="account-settings did_section" type="submit" id="did-submit-button"  value="<?php echo _("Update DID Configurations")?>" tabindex="<?php echo ++$tabindex;?>" />
		</form>
	  <?php foreach($dids as $did) { ?>
		  <div id="dialog-<?php echo $did['did']?>" title="<?php echo $did['did']?> Options">
		  	<strong>Address On Record:</strong><br/>
		  	<form method="post" id="didform-<?php echo $did['did']?>">
				<table style="border: 1px solid black">
		  			<tr>
		  				<td>Caller Name:</td>
		  				<td><input type="text" name="name-<?php echo $did['did']?>" id="name-<?php echo $did['did']?>" value="<?php echo isset($did['e911']['name']) ? $did['e911']['name'] : '' ?>"></td>
		  			</tr>
		  			<tr>
		  				<td>Address1:</td>
		  				<td><input type="text" name="address1-<?php echo $did['did']?>" id="address1-<?php echo $did['did']?>" value="<?php echo isset($did['e911']['street1']) ? $did['e911']['street1'] : ''?>"></td>
		  			</tr>
		  			<tr>
		  				<td>Address2:</td>
		  				<td><input type="text" name="address2-<?php echo $did['did']?>" id="address2-<?php echo $did['did']?>" value="<?php echo isset($did['e911']['street2']) ? $did['e911']['street2'] : ''?>"></td>
		  			</tr>
		  			<tr>
		  				<td>City:</td>
		  				<td><input type="text" name="city-<?php echo $did['did']?>" id="city-<?php echo $did['did']?>" value="<?php echo isset($did['e911']['city']) ? $did['e911']['city'] : ''?>"></td>
		  			</tr>
		  			<tr>
		  				<td>State:</td>
		  				<td><input type="text" name="state-<?php echo $did['did']?>" id="state-<?php echo $did['did']?>" value="<?php echo isset($did['e911']['state']) ? $did['e911']['state'] : ''?>"></td>
		  			</tr>
		  			<tr>
		  				<td>Zip:</td>
		  				<td><input type="text" name="zip-<?php echo $did['did']?>" id="zip-<?php echo $did['did']?>" value="<?php echo isset($did['e911']['zip']) ? $did['e911']['zip'] : ''?>"></td>
		  			</tr>
		  		</table>
		  		<span id="agreement-span-<?php echo $did['did']?>" style="<?php if(isset($did['e911']['master']) && $did['e911']['master']) {?>display:none<?php } ?>"><label><input type="checkbox" name="agreement-<?php echo $did['did']?>" <?php echo (isset($did['e911']['name']) && !empty($did['e911']['name'])) ? 'checked' : '' ?>>I agree to additional charges and have read the documentation here: <a style="color:blue" target="_blank" href="http://wiki.freepbx.org/display/ST/Additional+e911+Addresses">Additional E911 Addresses</a></label><br /></span>
		  		<input type="hidden" name="type" value="updatee911">
		  		<input type="hidden" id="e911master-<?php echo $did['did']?>" name="e911master" value="<?php if(!isset($did['e911']['master']) || !$did['e911']['master']) {?>no<?php } else { ?>yes<?php } ?>">
		  		<input type="hidden" name="didmaster" value="<?php echo $did['did']?>">
		  		<input type="button" id="updatee911-<?php echo $did['did']?>" name="updatee911" value="<?php if(isset($did['e911']['name'])) {?>Update<?php } else { ?>Add<?php } ?>" onclick="update911('update','<?php echo $did['did']?>')">
		  		<input type="button" id="sete911master-<?php echo $did['did']?>" name="sete911master" value="Set As Master E911" onclick="update911('master','<?php echo $did['did']?>')" style="<?php if(!isset($did['e911']['name']) || $did['e911']['master']) {?>display:none<?php } ?>">
		  		<input type="button" id="deletee911-<?php echo $did['did']?>" name="deletee911" value="Delete E911 for DID" onclick="update911('delete','<?php echo $did['did']?>')" style="<?php if(!isset($did['e911']['name']) || $did['e911']['master']) {?>display:none<?php } ?>">
			</form>
		</div>
		<script>
			if($('select#goto<?php echo $did['did']?>').val() == 'Extensions') {
				$(document).on('change', 'select#Extensions<?php echo $did['did']?>', function() {
					var select = $(this).val();
					var match = select.match(/from-did-direct,(.*),/)
					getextinfo(match[1],'<?php echo $did['did']?>');
				});
			}
			$(document).on('change', 'select#goto<?php echo $did['did']?>', function() {
				var did = $(this).attr('data-id');
				if($(this).val() == 'Extensions') {
					$('#setcid-'+did).show()
					$('#selectecid-'+did).show();
					$(document).on('change', 'select#Extensions<?php echo $did['did']?>', function() {
						var select = $(this).val();
						var match = select.match(/from-did-direct,(.*),/)
						getextinfo(match[1],did);
					});
					var select = $('select#Extensions<?php echo $did['did']?>').val();
					var match = select.match(/from-did-direct,(.*),/)
					getextinfo(match[1],did);
				} else {
					$('#setcid-'+did).hide()
					$('#selectecid-'+did).hide();
					$(document).off('change', 'select#Extensions<?php echo $did['did']?>');
				}
			});
			$(function() {
			  	/*
			  	* Generate DID dialog boxes
			  	*/
				$( "#dialog-<?php echo $did['did']?>" ).dialog({
					autoOpen: false,
					height: 300,
					width: 400,
					modal: true
				})
			});
		</script>
	<?php } ?>