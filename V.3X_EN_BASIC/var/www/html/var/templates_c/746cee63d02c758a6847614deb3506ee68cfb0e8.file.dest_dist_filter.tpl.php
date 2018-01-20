<?php /* Smarty version Smarty-3.1.21, created on 2017-03-02 11:03:52
         compiled from "/var/www/html/modules/dest_distribution/themes/default/dest_dist_filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9063778558b77d8893fd49-78016048%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '746cee63d02c758a6847614deb3506ee68cfb0e8' => 
    array (
      0 => '/var/www/html/modules/dest_distribution/themes/default/dest_dist_filter.tpl',
      1 => 1468305274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9063778558b77d8893fd49-78016048',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date_start' => 0,
    'date_end' => 0,
    'criteria' => 0,
    'Filter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58b77d8896f550_67869807',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77d8896f550_67869807')) {function content_58b77d8896f550_67869807($_smarty_tpl) {?><td width="8%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
<td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
<td width="10%" align="right"><?php echo $_smarty_tpl->tpl_vars['criteria']->value['LABEL'];?>
: </td>
<td width="12%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['criteria']->value['INPUT'];?>
</td>
<td width="12%" align="center"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" ></td>
<?php }} ?>
