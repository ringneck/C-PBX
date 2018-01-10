<?php /* Smarty version Smarty-3.1.21, created on 2017-12-02 14:06:37
         compiled from "/var/www/html/modules/sec_ports/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3583200595a2234dd680a88-28431519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aafec20e1b5ab9284e95496863ffb2d8dd5920c8' => 
    array (
      0 => '/var/www/html/modules/sec_ports/themes/default/filter.tpl',
      1 => 1498022412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3583200595a2234dd680a88-28431519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'filter_type' => 0,
    'filter_txt' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a2234dd6e4bc5_03862747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2234dd6e4bc5_03862747')) {function content_5a2234dd6e4bc5_03862747($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td align="left">
            <?php echo $_smarty_tpl->tpl_vars['filter_type']->value['LABEL'];?>
:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_type']->value['INPUT'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_txt']->value['INPUT'];?>

            <input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" />
        </td>
    </tr>
</table>
<?php }} ?>
