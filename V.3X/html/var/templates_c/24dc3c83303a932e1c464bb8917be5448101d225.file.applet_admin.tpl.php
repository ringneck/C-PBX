<?php /* Smarty version Smarty-3.1.21, created on 2017-12-22 00:22:31
         compiled from "/var/www/html/modules/applet_admin/themes/default/applet_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:599102785a213ee3295609-15676343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24dc3c83303a932e1c464bb8917be5448101d225' => 
    array (
      0 => '/var/www/html/modules/applet_admin/themes/default/applet_admin.tpl',
      1 => 1513863232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '599102785a213ee3295609-15676343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213ee331c9f0_20381142',
  'variables' => 
  array (
    'SAVE' => 0,
    'CANCEL' => 0,
    'checkall' => 0,
    'Applet' => 0,
    'Activated' => 0,
    'applets' => 0,
    'applet' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213ee331c9f0_20381142')) {function content_5a213ee331c9f0_20381142($_smarty_tpl) {?>
<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() {
 $('.checkall').click(function () {
     $(".letra12").find(':checkbox').prop('checked', $(this).is(':checked'));
 });


});
<?php echo '</script'; ?>
>

<table width="100%" border="0" cellspacing="0" cellpadding="4">
    <tr class="letra12">
        <td align="left">
            <input class="button" type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="99%" border="0">
    <tr>
        <td class="letra12" style="font-weight:bold; text-decoration: underline"> <input name="checkall" class="checkall" type="checkbox"><?php echo $_smarty_tpl->tpl_vars['checkall']->value;?>
 </td>
    </tr>
    <tr class="letra12">
        <td align="left" width="20%"><b><?php echo $_smarty_tpl->tpl_vars['Applet']->value;?>
</b></td>
        <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['Activated']->value;?>
</b></td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['applet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['applet']->_loop = false;
 $_smarty_tpl->tpl_vars['q'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['applets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['applet']->key => $_smarty_tpl->tpl_vars['applet']->value) {
$_smarty_tpl->tpl_vars['applet']->_loop = true;
 $_smarty_tpl->tpl_vars['q']->value = $_smarty_tpl->tpl_vars['applet']->key;
?>
        <tr class="letra12">
            <td align="left">
                <b><?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
:</b>
            </td>
            <td align="left">
                <input name="chkdau_<?php echo $_smarty_tpl->tpl_vars['applet']->value['id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['applet']->value['activated']) {?> checked="checked" <?php }?>>
            </td>
        </tr>
    <?php } ?>
</table>
<?php }} ?>
