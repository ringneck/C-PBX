#!/usr/bin/php
<?php

/*
 * This script is run to trigger a FreePBX warning for users who go past the
 * OpenCNAM Hobbyist Tier usage limits (see: https://www.opencnam.com for more
 * information).
 *
 * This script is meant to be run as an independent script by dialplan code.
 */


// Bootstrap the FreePBX framework.
if (!@include_once(getenv('FREEPBX_CONF') ? getenv('FREEPBX_CONF') : '/etc/freepbx.conf')) {
    include_once('/etc/asterisk/freepbx.conf');
}


/*
 * Fire off a FreePBX warning, alerting the user that they've gone past their
 * available OpenCNAM usage limits, and need to create a Professional Tier
 * account to continue getting Caller ID Name information.
 */
$nt = notifications::create($db);
$nt->add_warning('cidlookup', 'USAGELIMITS', _("OpenCNAM Throttle Reached!"), _("You have gone past the free OpenCNAM usage limits.<br/><br/>To continue getting caller ID name information, you need to create an OpenCNAM Professional Account.<br/><br/>You can create an OpenCNAM account at: <a href=\"https://www.opencnam.com/register\">https://www.opencnam.com/register</a>.<br/><br/>Once you have created an account, visit the CallerID Lookup Sources menu and enter your OpenCNAM Professional Tier credentials.<br/>"));

?>
