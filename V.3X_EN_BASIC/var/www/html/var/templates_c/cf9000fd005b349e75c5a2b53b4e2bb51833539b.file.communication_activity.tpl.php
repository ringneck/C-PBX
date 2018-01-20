<?php /* Smarty version Smarty-3.1.21, created on 2016-12-30 14:36:59
         compiled from "/var/www/html/modules/dashboard/applets/CommunicationActivity/tpl/communication_activity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5303580905865f27b2f0b32-44816011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf9000fd005b349e75c5a2b53b4e2bb51833539b' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/CommunicationActivity/tpl/communication_activity.tpl',
      1 => 1479844325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5303580905865f27b2f0b32-44816011',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'LABEL_TOTAL_CALLS' => 0,
    'LABEL_CALLS' => 0,
    'total' => 0,
    'internal' => 0,
    'LABEL_INTERNAL_CALLS' => 0,
    'external' => 0,
    'LABEL_EXTERNAL_CALLS' => 0,
    'LABEL_TOTAL_CHANNELS' => 0,
    'channel' => 0,
    'LABEL_QUEUES_WAITING' => 0,
    'totalQueues' => 0,
    'LABEL_WAITING' => 0,
    'LABEL_EXTENSIONS' => 0,
    'LABEL_SIP_EXTENSIONS' => 0,
    'total_sip_Ext' => 0,
    'sip_Ext_ok' => 0,
    'LABEL_STATUS_OK' => 0,
    'sip_Ext_nok' => 0,
    'LABEL_STATUS_NO_OK' => 0,
    'LABEL_IAX_EXTENSIONS' => 0,
    'total_iax_Ext' => 0,
    'iax_Ext_ok' => 0,
    'iax_Ext_nok' => 0,
    'LABEL_TRUNKS' => 0,
    'total_trunks' => 0,
    'total_trunks_ok' => 0,
    'total_trunks_nok' => 0,
    'total_trunks_unk' => 0,
    'LABEL_UNKNOWN' => 0,
    'LABEL_NETWORK_TRAFFIC' => 0,
    'LABEL_BYTES' => 0,
    'rx_bytes' => 0,
    'tx_bytes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5865f27b348ac4_92036458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5865f27b348ac4_92036458')) {function content_5865f27b348ac4_92036458($_smarty_tpl) {?><link rel="stylesheet" media="screen" type="text/css" href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/CommunicationActivity/tpl/css/styles.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/CommunicationActivity/js/javascript.js'><?php echo '</script'; ?>
>
<div class='tabFormTable'>
    <div class='infoActivity'>
        <div class='typeActivity'>
            <b><?php echo $_smarty_tpl->tpl_vars['LABEL_TOTAL_CALLS']->value;?>
: </b>
        </div>
        <div align='left' class='detailText'>
            <?php echo $_smarty_tpl->tpl_vars['LABEL_CALLS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
)</b> :
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['internal']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_INTERNAL_CALLS']->value;?>
)</font>
            <font color='red'> (<?php echo $_smarty_tpl->tpl_vars['external']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_EXTERNAL_CALLS']->value;?>
)</font>
        </div>
        <div class='typeActivity'>
            <b><?php echo $_smarty_tpl->tpl_vars['LABEL_TOTAL_CHANNELS']->value;?>
: </b>
        </div>
        <div align='left' class='detailActivity'><?php echo $_smarty_tpl->tpl_vars['channel']->value;?>
</div>
        <div class='typeActivity'>
            <b><?php echo $_smarty_tpl->tpl_vars['LABEL_QUEUES_WAITING']->value;?>
: </b>
        </div>
        <div align='left' class='detailActivity'><?php echo $_smarty_tpl->tpl_vars['totalQueues']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_WAITING']->value;?>
</div>
        <div class='typeActivity'><b><?php echo $_smarty_tpl->tpl_vars['LABEL_EXTENSIONS']->value;?>
: </b></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_SIP_EXTENSIONS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total_sip_Ext']->value;?>
) </b>:
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['sip_Ext_ok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_OK']->value;?>
)</font>
            <font color='red'>(<?php echo $_smarty_tpl->tpl_vars['sip_Ext_nok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_NO_OK']->value;?>
)</font>
        </div>
        <div class='typeActivity'></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_IAX_EXTENSIONS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total_iax_Ext']->value;?>
) </b>:
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['iax_Ext_ok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_OK']->value;?>
)</font>
            <font color='red'>(<?php echo $_smarty_tpl->tpl_vars['iax_Ext_nok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_NO_OK']->value;?>
)</font>
        </div>
        <div class='typeActivity'><b><?php echo $_smarty_tpl->tpl_vars['LABEL_TRUNKS']->value;?>
 (SIP/IAX): </b></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_TRUNKS']->value;?>
 <b>(<?php echo $_smarty_tpl->tpl_vars['total_trunks']->value;?>
) </b>:
            <font color='green'>(<?php echo $_smarty_tpl->tpl_vars['total_trunks_ok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_OK']->value;?>
)</font>
            <font color='red'>(<?php echo $_smarty_tpl->tpl_vars['total_trunks_nok']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_STATUS_NO_OK']->value;?>
)</font>
            <font color='gray'>(<?php echo $_smarty_tpl->tpl_vars['total_trunks_unk']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LABEL_UNKNOWN']->value;?>
)</font>
        </div>
        <div class='typeActivity'><b><?php echo $_smarty_tpl->tpl_vars['LABEL_NETWORK_TRAFFIC']->value;?>
: </b></div>
        <div class='detailText'><?php echo $_smarty_tpl->tpl_vars['LABEL_BYTES']->value;?>

            <b>(<span id='communication_activity_rx_bytes'><?php echo $_smarty_tpl->tpl_vars['rx_bytes']->value;?>
</span>kB/s)</b> <= RX | TX => <b>(<span id='communication_activity_tx_bytes'><?php echo $_smarty_tpl->tpl_vars['tx_bytes']->value;?>
</span>kB/s)</b>
        </div>
    </div>
</div>
<?php }} ?>
