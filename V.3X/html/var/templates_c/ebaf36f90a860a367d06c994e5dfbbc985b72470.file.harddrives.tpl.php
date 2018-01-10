<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:55:16
         compiled from "/var/www/html/modules/dashboard/applets/HardDrives/tpl/harddrives.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16194423795a213196eecd69-48484489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebaf36f90a860a367d06c994e5dfbbc985b72470' => 
    array (
      0 => '/var/www/html/modules/dashboard/applets/HardDrives/tpl/harddrives.tpl',
      1 => 1513863238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16194423795a213196eecd69-48484489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213197043de5_52019715',
  'variables' => 
  array (
    'module_name' => 0,
    'part' => 0,
    'particion' => 0,
    'LABEL_PERCENT_USED' => 0,
    'LABEL_PERCENT_AVAILABLE' => 0,
    'LABEL_DISK_CAPACITY' => 0,
    'LABEL_MOUNTPOINT' => 0,
    'LABEL_DISK_VENDOR' => 0,
    'TEXT_WARNING_DIRSPACEREPORT' => 0,
    'FETCH_DIRSPACEREPORT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213197043de5_52019715')) {function content_5a213197043de5_52019715($_smarty_tpl) {?><link rel="stylesheet" media="screen" type="text/css" href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/HardDrives/tpl/css/styles.css" />
<?php echo '<script'; ?>
 type='text/javascript' src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/HardDrives/js/javascript.js'><?php echo '</script'; ?>
>
<?php  $_smarty_tpl->tpl_vars['particion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['particion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['part']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['particion']->key => $_smarty_tpl->tpl_vars['particion']->value) {
$_smarty_tpl->tpl_vars['particion']->_loop = true;
?>
<div>
    <div id="dashboard-applet-hd-usage" style="width:160px; height:160px;"></div>
    <?php echo '<script'; ?>
>
        
        var ram = new JustGage({
          id: "dashboard-applet-hd-usage", 
          value: <?php echo $_smarty_tpl->tpl_vars['particion']->value['porcentaje_usado'];?>
, 
          min: 0,
          max: 100,
          donut: true,
          startAnimationType : 'bounce',
          shadowSize: 0,
          shadowVerticalOffset: 0,
          valueFontColor: '#666666',
          levelColors : ['#3184d5'],
          gaugeColor : '#6e407e',
          label: "%"
        }); 
    <?php echo '</script'; ?>
>
    <div class="neo-applet-hd-innerbox">
      <div class="neo-applet-hd-innerbox-top">
       <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/HardDrives/images/light_usedspace.png" width="13" height="11" alt="used" /> <?php echo $_smarty_tpl->tpl_vars['particion']->value['formato_porcentaje_usado'];?>
% <?php echo $_smarty_tpl->tpl_vars['LABEL_PERCENT_USED']->value;?>
 &nbsp;&nbsp;<img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/HardDrives/images/light_freespace.png" width="13" height="11" alt="used" /> <?php echo $_smarty_tpl->tpl_vars['particion']->value['formato_porcentaje_libre'];?>
% <?php echo $_smarty_tpl->tpl_vars['LABEL_PERCENT_AVAILABLE']->value;?>

      </div>
      <div class="neo-applet-hd-innerbox-bottom">
        <div><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_DISK_CAPACITY']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['particion']->value['sTotalGB'];?>
GB</div>
        <div><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_MOUNTPOINT']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['particion']->value['punto_montaje'];?>
</div>
        <div><strong><?php echo $_smarty_tpl->tpl_vars['LABEL_DISK_VENDOR']->value;?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['particion']->value['sModelo'];?>
</div>
      </div>
    </div>
</div>
<?php } ?>

<div class="neo-divisor"></div>
<div id="harddrives_dirspacereport">
<p><?php echo $_smarty_tpl->tpl_vars['TEXT_WARNING_DIRSPACEREPORT']->value;?>
</p>
<button class="submit" id="harddrives_dirspacereport_fetch" ><?php echo $_smarty_tpl->tpl_vars['FETCH_DIRSPACEREPORT']->value;?>
</button>
</div><?php }} ?>
