<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:58:06
         compiled from "/var/www/html/modules/group_permission/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:516705255a2130f6628bf0-93290621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb64e02a3e14b6e45ca4ef6f48b76e2dd96c2912' => 
    array (
      0 => '/var/www/html/modules/group_permission/themes/default/filter.tpl',
      1 => 1513863239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '516705255a2130f6628bf0-93290621',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a2130f6657020_33451301',
  'variables' => 
  array (
    'filter_group' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2130f6657020_33451301')) {function content_5a2130f6657020_33451301($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td width="10%" align="right"><?php echo $_smarty_tpl->tpl_vars['filter_group']->value['LABEL'];?>
:</td>
        <td width="20%" align="left"><?php echo $_smarty_tpl->tpl_vars['filter_group']->value['INPUT'];?>
</td>
        <td align="left"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" /><td>
    </tr>
</table>
<?php }} ?>
