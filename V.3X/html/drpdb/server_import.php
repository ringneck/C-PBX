<?php
/* $Id: server_import.php,v 2.2 2005/11/18 12:50:49 cybot_tm Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:

require_once('./libraries/common.lib.php');

/**
 * Does the common work
 */
require('./server_common.inc.php');


/**
 * Displays the links
 */
require('./server_links.inc.php');

$import_type = 'server';
require('./libraries/display_import.lib.php');
/**
 * Displays the footer
 */
require('./footer.inc.php');
?>

