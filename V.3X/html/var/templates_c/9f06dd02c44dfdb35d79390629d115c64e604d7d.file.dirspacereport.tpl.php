<?php /* Smarty version Smarty-3.1.21, created on 2017-12-22 00:22:25
         compiled from "/var/www/html/modules/dashboard/applets/HardDrives/tpl/dirspacereport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17001239425a3bd1b1734c46-56338813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f06dd02c44dfdb35d79390629d115c64e604d7d' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/HardDrives/tpl/dirspacereport.tpl',
      1 => 1513863238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17001239425a3bd1b1734c46-56338813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listaReporteDir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a3bd1b188e905_27225569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3bd1b188e905_27225569')) {function content_5a3bd1b188e905_27225569($_smarty_tpl) {?><div class="neo-applet-hd-report-row">
    <div class="neo-applet-hd-report-row-left" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['logs']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['logs']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['logs']['use'];?>
</div>
    <div class="neo-applet-hd-report-row-right" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['backups']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['backups']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['backups']['use'];?>
</div>
</div>
<div class="neo-applet-hd-report-row">
    <div class="neo-applet-hd-report-row-left" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['emails']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['emails']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['emails']['use'];?>
</div>
    <div class="neo-applet-hd-report-row-right" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['config']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['config']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['config']['use'];?>
</div>
</div>
<div class="neo-applet-hd-report-row">
    <div class="neo-applet-hd-report-row-left" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['voicemails']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['voicemails']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['voicemails']['use'];?>
</div>
    <div class="neo-applet-hd-report-row-right" title="<?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['recordings']['dir'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['recordings']['tag'];?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['listaReporteDir']->value['recordings']['use'];?>
</div>
</div>
<?php }} ?>
