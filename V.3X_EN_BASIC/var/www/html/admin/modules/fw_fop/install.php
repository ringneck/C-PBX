<?php
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed'); }
// This file is part of FreePBX.
//
//    FreePBX is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 2 of the License, or
//    (at your option) any later version.
//
//    FreePBX is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with FreePBX.  If not, see <http://www.gnu.org/licenses/>.
//
//   Copyright 2006 FreePBX
//

global $amp_conf;
global $asterisk_conf;
global $db;

$freepbx_conf =& freepbx_conf::create();

//
// CATEGORY: Flash Operator Panel
//
$set['category'] = 'Flash Operator Panel';
$set['level'] = 0;
$set['module'] = 'fw_fop';

// FOPSORT
$set['value'] = 'extension';
$set['defaultval'] =& $set['value'];
$set['options'] = 'extension,lastname';
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['emptyok'] = 0;
$set['name'] = 'FOP Sort Mode';
$set['description'] = 'How FOP sort extensions. By Last Name [lastname] or by Extension [extension].';
$set['type'] = CONF_TYPE_SELECT;
$freepbx_conf->define_conf_setting('FOPSORT',$set);

// FOPPASSWORD
$set['value'] = 'passw0rd';
$set['defaultval'] =& $set['value'];
$set['options'] = '';
$set['readonly'] = 0;
$set['hidden'] = 0;
$set['emptyok'] = 0;
$set['name'] = 'FOP Password';
$set['description'] = 'Password for performing transfers and hangups in the Flash Operator Panel (FOP).';
$set['type'] = CONF_TYPE_TEXT;
$freepbx_conf->define_conf_setting('FOPPASSWORD',$set);

// remove deprecated settings
$freepbx_conf->remove_conf_settings(array('FOPRUN','FOPDISABLE'));

$fopwebroot = $amp_conf['AMPWEBROOT'] . '/admin/modules/fw_fop';

// TODO: check old setting and if it is not the current directory then migrate the old stuff here before changing the setting.
//
if ($amp_conf['FOPWEBROOT'] != $fopwebroot) {
	out(_("migrating FOP to new location"));
	$migrate_files = array('op_buttons_additional.cfg','op_buttons_custom.cfg', 'variables.txt');
	// TODO move files if they exist
	foreach ($migrate_files as $file) {
		$this_file = $amp_conf['FOPWEBROOT'] . '/' . $file;
		if (is_file($this_file)) {
			outn(sprintf(_("copying %s.."),$file));
			if (!copy($this_file,$fopwebroot . '/' . $file)) {
				out(_("failed"));
			} else {
				out(_("ok"));
			}
		}
	}
}

$freepbx_conf->set_conf_values(array('FOPWEBROOT' => $fopwebroot), true, true);

// Clean up old notification categorized under freepbx since it is now fw_fop
//
$nt = notifications::create($db);
$nt->delete('freepbx','reload_fop');
?>
