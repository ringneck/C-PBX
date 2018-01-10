<form autocomplete="off" name="editSip" action="" method="post">
<input type="hidden" name="action" id="action" value="edit">
<input type="hidden" name="key_status" id="key_status" value="<?php echo $status ?>">
<input type="hidden" name="set_key_status" id="set_key_status" value="<?php echo $set_key_status ?>">
<input type="hidden" name="trunkid[gw1]" id="trunkid_gw1" value="">
<input type="hidden" name="trunkid[gw2]" id="trunkid_gw2" value="">
<table width="80%">
	<?php if ($action == 'remove_all') { ?>
	  <tr>
	    <td colspan="2">
	      <br /><br /><br />
	      <div class="sipstation-errors">
	        <p><?php echo _("KEYS AND TRUNKS REMOVED!") ?></p>
	        <ul>
				<?php echo _("Your SIPStation trunks and key have been removed from your system, make sure to Apply Configuration Changes for this to take effect"); ?>
	        </ul>
	      </div>
	    </td>
	  </tr>
	<?php } ?>
    <tr>
		<td colspan="2">
			<h5>
				<?php if ($status != 'nokey') { ?>
					<span class="sipstation-section toggle-minus" id="account_access_section">&nbsp;</span>
				<?php } ?>
				<?php echo sprintf(_("%s Account Access"),'SIPStation') ?>
				<hr>
			</h5>
		</td>
	</tr>