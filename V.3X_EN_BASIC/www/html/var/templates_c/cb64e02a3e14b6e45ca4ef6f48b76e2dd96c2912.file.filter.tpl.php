<?php /* Smarty version Smarty-3.1.21, created on 2016-12-31 14:47:06
         compiled from "/var/www/html/modules/group_permission/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15919791895867465add8826-46633763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb64e02a3e14b6e45ca4ef6f48b76e2dd96c2912' => 
    array (
      0 => '/var/www/html/modules/group_permission/themes/default/filter.tpl',
      1 => 1479916886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15919791895867465add8826-46633763',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_group' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5867465adfdf10_51641815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5867465adfdf10_51641815')) {function content_5867465adfdf10_51641815($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
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
