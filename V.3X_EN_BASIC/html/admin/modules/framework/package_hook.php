<?php

//remove stale files
if(!run_cmd('rm -rf ' . $vars['fw'] . '/amp_conf/agi-bin ' 
			. $vars['fw'] . '/amp_conf/bin '
			. $vars['fw'] . '/amp_conf/htdocs '
			. $vars['fw'] . '/amp_conf/htdocs_panel '
			. $vars['fw'] . '/upgrades '
			. $vars['fw'] . '/libfreepbx.install.php '
			. $vars['fw'] . '/CHANGES ')
) {
	die('FATAL: failed to remove previously exported directories' . PHP_EOL);
}

$fresh = array(
		'/amp_conf/agi-bin',
		'/amp_conf/bin',
		'/amp_conf/htdocs',
		'/upgrades',
		'/libfreepbx.install.php',
		'/CHANGES'
);
//grab fresh files
foreach ($fresh as $f) {
	if(!run_cmd('svn export ' . $vars['svn_path'] . '/freepbx/' . $vars['fwbranch'] . $f 
		. ' ' . $vars['fw'] . $f)
	) {
		die('FATAL: failed to export fresh ' . $f . PHP_EOL);
	}
}

//save revision number
if(!run_cmd('echo SVN VERSION: `svn info ' . $vars['svn_path'] . '/freepbx/' . $vars['fwbranch'] 
			. '|grep Revision:|awk \'{print $2}\'` > ' 
			. $vars['fw'] . '/svnversion.txt')
) {
	die('FATAL: ailed to create svnversion.txt' . PHP_EOL);
}


//some files need to be removed
//recordings is its onw module
//htdocs root mainstyle.css and index.html as these are owned by root
//retrieve_op_conf_from_mysql.pl now handled by fw_fop
if(!run_cmd('rm -rf ' . $vars['fw'] . '/amp_conf/htdocs/recordings ' 
			. $vars['fw'] . '/amp_conf/htdocs/mainstyle.css '
			. $vars['fw'] . '/amp_conf/htdocs/index.html '
			. $vars['fw'] . '/amp_conf/htdocs/robots.txt '
			. $vars['fw'] . '/amp_conf/htdocs/admin/modules/_cache '
			. $vars['fw'] . '/amp_conf/bin/retrieve_op_conf_from_mysql.php ')
) {
	die('FATAL: failed to cleanup' . PHP_EOL);
}

// files to exclude from tarball
//
$exclude[] = 'package_hook.php';
$exclude[] = 'modules/import.sh';
$exclude[] = 'modules/modlist.sh';
$exclude[] = 'modules/remove.sh';
$exclude[] = 'modules/status.sh';
$exclude[] = 'modules/update.sh';

// files to exclude from php scanning, in particular php-ugprade will have failures because conflicts
// with native functionality which normally would not be incuded since their inclusion is conditinal
// with the currently running php version but when scanning that is not done.
//
$file_scan_exclude_list = array('upgrades','php-upgrade','i18n','assets','images');
?>
