<?php
/* $Id:$ */
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
//	License for all code of this FreePBX module can be found in the license file inside the module directory
//	Copyright 2013 Schmooze Com Inc.
//
global $db;
global $amp_conf;

/* Delete all occurences of the specified trunk from all routes that may use it
 * this only gets called if the extensions table is still present and this is needed
 */
function __core_routing_trunk_del($trunknum) {
	global $db;

	$sql = "DELETE FROM `extensions` WHERE `application` = 'Macro' AND `context` LIKE 'outrt-%' AND `args` LIKE 'dialout-%,$trunknum,%'";
	$result = $db->query($sql);
}

/* A long standing bug resulted in routes with trunk numbers that had been deleted. Because trunk numbers are recycled (something that
   should be removed in the future), this can result in a new trunk being created and then silently inserted as part of a route that is
   not intended. This will find all phantom trunks and remove them from routes.

   The following code should no longer be required with the new outbound routes stuff. However, it's remotely possible that this module
   could get loaded on an upgrade scenario where core hasn't done a migration yet. Setting this module to depend on core makes for a
   more painful upgrade process so we will simply leave this code in place since it checks for the extensions table and if not found
   it does nothing. If found, it just manipulates that table which could still help in a subsequent migration to the new outbound routes.
*/

/* Get a list of all trunks being used
 */
outn(_("Checking routes for trunks.."));
$sql = "SELECT DISTINCT `args` FROM `extensions` WHERE `context` LIKE 'outrt-%' AND `application` = 'Macro' AND `args` LIKE 'dialout-%'";
$results = $db->getCol($sql);
if(DB::IsError($results)) {
	$results = array();
	out(_("ok"));
} else {
	$trunks = array();
	$trunks_hash = array();
	foreach ($results as $trunk_call) {
		if (preg_match('/^dialout-(?:trunk|enum|dundi),([\d]+),.*$/',$trunk_call,$match) != 1) {
			out(_("error detected"));
			out(sprintf(_("an erroneous entry, %s,  was found in extensions table that should not be there"),$trunk_call));
		} else {
			$trunks_hash[$match[1]] = "OUT_".$match[1];
		}
	}
	$num_trunks = count($trunks_hash);
	out(sprintf(_("found %s"),$num_trunks));

	outn(_("checking for phantoms.."));

	require_once($amp_conf['AMPWEBROOT'].'/admin/modules/core/functions.inc.php');
	$trunks = core_trunks_list(true);

	$bad_trunks = array();
	$cnt = 0;
	foreach ($trunks_hash as $trunknum => $globalvar) {
		$bad = true;
		foreach ($trunks as $trunk) {
			if ($trunk['globalvar'] == $globalvar) {
				$bad = false;
				break;
			}
		}
		if ($bad) {
			$cnt++;
			outn("$trunknum..");
			__core_routing_trunk_del($trunknum);
		}
	}
	if ($cnt) {
		out(sprintf(_("removed %s phantoms"),$cnt));
	} else {
		out(_("none"));
	}
}

$sql = "SELECT data FROM module_xml WHERE id = 'ss_route'";
$dat = sql($sql, "getOne");
if(!empty($dat) && function_exists('core_routing_getroutepatternsbyid')) {
	$info = json_decode($dat,TRUE);
	if(isset($info['outbound_routes']['outbound'])) {
		$patterns = core_routing_getroutepatternsbyid($info['outbound_routes']['outbound']);
		$add = true;
		foreach($patterns as $pattern) {
			if($pattern['match_pattern_pass'] == '1844NXXXXXX') {
				$add = false;
			}
		}
		if($add) {
			out(sprintf(_("Adding new 844 toll free route"),$cnt));
			$patterns[] = array(
				'prepend_digits' => '', 
				'match_pattern_prefix' => '', 
				'match_pattern_pass' => '1844NXXXXXX', 
				'match_cid' => ''
			);
		}
		core_routing_updatepatterns($info['outbound_routes']['outbound'],$patterns,TRUE);
	}
}