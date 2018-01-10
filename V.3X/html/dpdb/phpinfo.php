<?php
/* $Id: phpinfo.php,v 2.4 2005/11/18 12:50:49 cybot_tm Exp $ */
// vim: expandtab sw=4 ts=4 sts=4:


/**
 * Gets core libraries and defines some variables
 */
require_once('./libraries/common.lib.php');


/**
 * Displays PHP information
 */
$is_superuser = @PMA_DBI_try_query('USE mysql', $userlink);
if ($is_superuser || $cfg['ShowPhpInfo']) {
    phpinfo();
}
?>
