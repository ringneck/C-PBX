<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:58:37
         compiled from "/var/www/html/modules/missed_calls/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1470642435a30bde72526f6-66240665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2597a61a9b0663191131fdc5c05c19b498998e6' => 
    array (
      0 => '/var/www/html/modules/missed_calls/themes/default/filter.tpl',
      1 => 1513863236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1470642435a30bde72526f6-66240665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a30bde72cabf6_99061718',
  'variables' => 
  array (
    'date_start' => 0,
    'filter_field' => 0,
    'filter_value' => 0,
    'SHOW' => 0,
    'date_end' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a30bde72cabf6_99061718')) {function content_5a30bde72cabf6_99061718($_smarty_tpl) {?><table width="55%" border="0" cellspacing="0" cellpadding="0">
    <tr class="letra12">
        <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="10%" align="center" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
	<td width="30%" align="right">
            <?php echo $_smarty_tpl->tpl_vars['filter_field']->value['LABEL'];?>
:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_field']->value['INPUT'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_value']->value['INPUT'];?>

            <input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" />
        </td>
   </tr>
   <tr class="letra12">     
	<td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="10%" align="center" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        
    </tr>
</table>
<?php }} ?>
