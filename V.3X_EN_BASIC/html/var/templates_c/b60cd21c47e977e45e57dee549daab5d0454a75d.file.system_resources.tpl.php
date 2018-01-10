<?php /* Smarty version Smarty-3.1.21, created on 2016-12-30 14:36:58
         compiled from "/var/www/html/modules/dashboard/applets/SystemResources/tpl/system_resources.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17996619605865f27ad37ba5-22207572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b60cd21c47e977e45e57dee549daab5d0454a75d' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/SystemResources/tpl/system_resources.tpl',
      1 => 1479844325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17996619605865f27ad37ba5-22207572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'cpugauge' => 0,
    'LABEL_CPU' => 0,
    'memgauge' => 0,
    'LABEL_RAM' => 0,
    'swapgauge' => 0,
    'LABEL_SWAP' => 0,
    'LABEL_CPUINFO' => 0,
    'cpu_info' => 0,
    'LABEL_UPTIME' => 0,
    'uptime' => 0,
    'LABEL_CPUSPEED' => 0,
    'speed' => 0,
    'LABEL_MEMORYUSE' => 0,
    'memtotal' => 0,
    'swaptotal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5865f27ad7acc8_58817423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5865f27ad7acc8_58817423')) {function content_5865f27ad7acc8_58817423($_smarty_tpl) {?><link rel="stylesheet" media="screen" type="text/css" href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/SystemResources/tpl/css/styles.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/SystemResources/js/javascript.js'><?php echo '</script'; ?>
>
<div style='height:165px; position:relative; text-align:center;'>
    <div style='width:152px; float:left; position: relative;' id='cpugauge'>
        <div id="dashboard-applet-cpugauge" style="width:140px; height:140px"></div>
        <input type="hidden" name="cpugauge_value" id="cpugauge_value" value="<?php echo $_smarty_tpl->tpl_vars['cpugauge']->value['fraction'];?>
" />
        <input type="hidden" name="cpugauge_label" id="cpugauge_label" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_CPU']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
    </div>
    <div style='width:152px; float:left; position: relative;' id='memgauge'>
        <div id="dashboard-applet-memgauge" style="width:140px; height:140px"></div>
        <input type="hidden" name="memgauge_value" id="memgauge_value" value="<?php echo $_smarty_tpl->tpl_vars['memgauge']->value['fraction'];?>
" />
        <input type="hidden" name="memgauge_label" id="memgauge_label" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_RAM']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
    </div>
    <div style='width:152px; float:right; position: relative;' id='swapgauge'>
        <div id="dashboard-applet-swapgauge" style="width:140px; height:140px"></div>
        <input type="hidden" name="swapgauge_value" id="swapgauge_value" value="<?php echo $_smarty_tpl->tpl_vars['swapgauge']->value['fraction'];?>
" />
        <input type="hidden" name="swapgauge_label" id="swapgauge_label" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_SWAP']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
    </div>
</div>
<div class='neo-divisor'></div>
<div class=neo-applet-tline>
    <div class='neo-applet-titem'><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_CPUINFO']->value;?>
:</strong></div>
    <div class='neo-applet-tdesc'><?php echo $_smarty_tpl->tpl_vars['cpu_info']->value;?>
</div>
</div>
<div class=neo-applet-tline>
    <div class='neo-applet-titem'><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_UPTIME']->value;?>
:</strong></div>
    <div class='neo-applet-tdesc'><?php echo $_smarty_tpl->tpl_vars['uptime']->value;?>
</div>
</div>
<div class='neo-applet-tline'>
    <div class='neo-applet-titem'><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_CPUSPEED']->value;?>
:</strong></div>
    <div class='neo-applet-tdesc'><?php echo $_smarty_tpl->tpl_vars['speed']->value;?>
</div>
</div>
<div class='neo-applet-tline'>
    <div class='neo-applet-titem'><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_MEMORYUSE']->value;?>
:</strong></div>
    <div class='neo-applet-tdesc'>RAM: <?php echo $_smarty_tpl->tpl_vars['memtotal']->value;?>
 SWAP: <?php echo $_smarty_tpl->tpl_vars['swaptotal']->value;?>
</div>
</div>
<?php }} ?>
