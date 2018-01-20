<tr class="account_access_section">
	<td colspan="2">
		<small><?php echo sprintf(_("To disable account access, click %s. The auto generated trunk, route and DID configurations will remain active even if the key is removed. 
			To also remove the Trunks, chose the %s options instead"), 
			"<i>"._("Remove Key")."</i>", 
			"<i>"._("Remove Key & Delete Trunks")."</i>") ?>
		</small>
		<br /><br />
	</td>
</tr>
<tr class="account_access_section">
	<td colspan="2">
		<input type="submit" name="remove_key" id="remove_key" value="<?php echo _("Remove Key")?>" tabindex="<?php echo ++$tabindex;?>" />&nbsp;
		<input type="submit" name="remove_key_del_trunks" id="remove_key_del_trunks"  value="<?php echo _("Remove Key & Delete Trunks")?>" tabindex="<?php echo ++$tabindex;?>" />&nbsp;
	</td>
</tr>
<tr class="firewall-test" id="sipstation-system-status">
	<td colspan="2"><h5><?php echo _("System Status") ?><hr></h5></td>
</tr>
<tr>
	<td colspan="2">
		<div class="sipstation-errors">
			<p><?php echo _("WARNING") ?></p>
			<ul>
				<?php
				switch ($status) {
					case 'invalid':
						echo _("Your key is no longer valid. Click below to remove the current key. To obtain a new key and use this module, visit the portal at https://store.freepbx.com and log into your account.");
					break;
					case 'tempnotavail':
						echo _("The server is currently unavailable and we can not process your request. Please check back with us later. We apologize for the inconvenience.");
					break;
					default:
						echo _("The server is currently not responding. It is either unavailable or access is being blocked. If the server is unavailable, please try again later.");
				}
				?>
			</ul>
		</div>
	</td>
</tr>