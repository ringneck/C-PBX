<?php
/* $Id:$ */
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2013 Schmooze Com Inc.
//

$output         = array();
$used_udp_hash  = array();
$listen_address = '0.0.0.0';

// Get the rpt ports Asterisk is configured for, make sure we start on even port
//
$rtp_ports = !file_exists($amp_conf['ASTETCDIR']."/rtp_additional.conf") ? parse_ini_file($amp_conf['ASTETCDIR']."/rtp.conf") : parse_ini_file($amp_conf['ASTETCDIR']."/rtp_additional.conf");

$port_start = !empty($rtp_ports['rtpstart']) ? $rtp_ports['rtpstart'] : 10000;
$port_start += ($port_start % 2); //make sure we have an even port
$port_end = !empty($rtp_ports['rtpend']) ? $rtp_ports['rtpend'] : 20000;
unset($rtp_ports);

// Get all the ports currently being used now
$netstat = exec('which netstat');
$netstat = !empty($netstat) ? $netstat : 'netstat';
exec($netstat.' -aunl',$output,$res);
foreach ($output as $line) {
	$res = preg_match('/^\s*udp\s*\d\s*\d\s*(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}):(\d{1,5})\s*.*$/',$line,$matches);
	if ($res) {
		$used_udp_hash[$matches[2]] = $matches[1];
	}
}

while (isset($used_udp_hash[$port_start]) && $port_start < $port_end) {
	$port_start += 2;
}

$json_array['status'] = 'success';
if ($port_start > $port_end) {
	$json_array['status'] = 'no_ports';
	$json_array['status_message'] = _("No Free Ports in Asterisk RTP Port Range available for testing, you can try later");
} else {
	// Setup the receive end before ping the server to get started
	$listen_port = (int)$port_start;
	$listen_sock = socket_create(AF_INET, SOCK_DGRAM, 0);

	if (@socket_bind($listen_sock, $listen_address, $listen_port) === false) {
		$json_array['status'] = 'socket_bind_listen_failed';
		$json_array['status_message'] = socket_strerror(socket_last_error($listen_sock)).". Could not bind to intended listen port ($listen_address:$listen_port) to receive test tocken.";
	} else {
		socket_set_nonblock($listen_sock);
		// OK, now we are listening so lets tell the server to send us something
		$send_port = (string)$port_start;
		$token = md5($send_port*rand());
		$fn = "http://mirror.freepbx.org/whatismyip.php?";
		$fn .= "port=$send_port&token=".urlencode($token);

		// Now build the token we will get back, to look like a g711u payload I hope
		// this gets around any potential firewall issues though it is a stray packet
		$header = "\x80\x80\x5a\x1d\xac\xe1\x37\xab\x3b\xb7\x59\xc8";
		$token   = $header.$token.$token.$token.$token.$token;

		$ip_xml = file_get_contents_url($fn);
		//TODO: check for === false and deal with detected error

		preg_match('|^<xml><ipaddress>(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})</ipaddress></xml>$|',$ip_xml,$matches);
		if (isset($matches[1])) {
			$json_array['externip'] = $matches[1];
		}

		// OK, now we fired off our request and it returned, which means it should have fired off our
		// packet which should be buffered and waiting for us to read
		//
		$res = false;
		$count = 5;
		$string = $string2 = "";
		while ($res === false && $count > 0) {
			$res = @socket_recv($listen_sock, $string, 1024, 0);
			if ($res === false) {
				sleep(1);
			}
			$count--;
		}
		sleep(1);
		$res = @socket_recv($listen_sock, $string2, 1024, 0);
		socket_close($listen_sock);
		if ($res) {
			$string += $string2;
		}
	}
}
if ($json_array['status'] != 'success') {
	// Already filled in
} elseif ($count <= 0 && $string != $token) {
	$json_array['status'] = 'timeout';
	$json_array['status_message'] = _("The test timed out which means your firewall is probably configured wrong. If subsequent tests fail, check your port forwarding on the firewall.");
} elseif ($string != $token) {
	$json_array['status'] = 'bad_token';
	$json_array['status_message'] = _("An unexpected token was returned, try the test again");
}

sleep(0);
header("Content-type: application/json"); 
echo json_encode($json_array);
