<?php
/* $Id:$ */
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }

/* We can use the cached config data as we were just told that
   trunk params have changed and chose to update
 */

$sip_username = $_POST['sip_username'];
$gateways['gw1'] = $_POST['gw1'];
$gateways['gw2'] = $_POST['gw2'];

$json_array['status'] = 'success';
// Get the Asterisk Registration Status
$trunk_status = $sipstation->get_registration_status($sip_username);
foreach ($gateways as $gw => $trunk) {
  if (isset($trunk_status[$trunk])) {
    $json_array['asterisk_registry'][$gw] = $trunk_status[$trunk];
  } else {
    $json_array['asterisk_registry'][$gw] = _("Not Registered");
  }
}

for ($i=1;$i<3;$i++) {
  $channelid   = "fpbx-$i-$sip_username";
  $trunk_status = $sipstation->get_peer_status($channelid);
  if ($trunk_status['sipstation_status'] == 'ok') {
    $json_array['trunk_qualify']["gw$i"] = $trunk_status['Status'];
  }
}
header("Content-type: application/json"); 
echo json_encode($json_array);
