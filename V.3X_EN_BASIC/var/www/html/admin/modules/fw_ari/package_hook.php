<?php

//remove stale files
if(!run_cmd('rm -rf ' . $vars['fw_ari'] . '/htdocs_ari')) {
	die('FATAL: failed to remove previously exported items' . PHP_EOL);
}

$fresh = array(
		'/htdocs_ari'
);
//grab fresh files
foreach ($fresh as $f) {
	if(!run_cmd('svn export ' . $vars['svn_path'] . '/freepbx/' . $vars['fwbranch'] . '/amp_conf/htdocs/recordings/ ' 
		. $vars['fw_ari'] . $f
		)
	) {
		die('FATAL: failed to export htdocs_ari ' . PHP_EOL);
	}
}

//save revision number
if(!run_cmd('echo SVN VERSION: `svn info ' . $vars['svn_path'] . '/freepbx/'   
			. '|grep Revision:|awk \'{print $2}\'` > ' 
			. $vars['fw_ari'] . '/svnversion.txt')
) {
	die('FATAL: ailed to create svnversion.txt' . PHP_EOL);
}


//some files need to be removed
//recordings is its onw module
//htdocs root mainstyle.css and index.html as these are owned by root
//retrieve_op_conf_from_mysql.pl now handled by fw_fop
if(!run_cmd('rm -rf ' 
			. $vars['fw_ari'] . '/htdocs_ari/includes/main.conf.php ')
) {
	die('FATAL: failed to cleanup' . PHP_EOL);
}

$exclude[] = 'package_hook.php';

// add modulename.module extensions as php files for syntax checking
$vars['php_extens'][] = 'module';
?>
