<tr id="sipstation-system-status">
	<td colspan="2">
		<div id="sipstation-information">
			<a border="none" href="https://store.freepbx.com" title="Click to access SIPStation Portal and Trunk Purchases" Alt="SIPStation PORTAL AND TRUNK PURCHASE" target="_sipstation">
				<img align="center" src="assets/sipstation/images/storeFrontSipStation-00002.png" width="771px" height="211px" border="0">
			</a>
			<p>
				<?php echo sprintf(_("This module requires %s trunking service available at %s or click on the image above. 
				Once you have service a key will be available in the portal. Enter it below to use this module. 
				The key is very long, use \"Copy\" &amp; \"Paste\" to copy it here. The key will be stored securely and can be removed at any time to stop access. 
				If the key is compromised, you can contact us at our %s and have a new one re-generated."),
				'<a href="https://store.freepbx.com" target="_sipstation" title="FreePBX SIP Store and Portal">SIPStation</a>',
				'<a href="https://store.freepbx.com" target="_sipstation" title="FreePBX SIP Store and Portal">https://store.freepbx.com</a>',
				'<a href="http://support.schmoozecom.com" target="_sipstationsupport" title="Schmoozecom Support">Support Center</a>')?>
			</p>
		</div>
	</td>
</tr>
<tr>
	<td>
		<a href="#" class="info"><?php echo _("Account Key")?>
			<span>
				<?php echo _("In order to use this service you must have a SIPStation FreePBX.com portal account and service (https://store.freepbx.com). 
			From there you can obtain a unique secure key which you should copy and paste into this key field. 
			Once entered, you can access your services from within this module without exposing your account username and password. 
			You can remove the key at any time")?>
			</span>
		</a>
	</td>
	<td><input type="text" size="100" id="account_key" name="account_key" tabindex="<?php echo ++$tabindex;?>"></td>
</tr>
<tr>
	<td colspan="2"><br>
		<input type="submit" name="add_key" id="add_key" value="<?php echo _("Add Key")?>" tabindex="<?php echo ++$tabindex;?>">
	</td>
</tr>