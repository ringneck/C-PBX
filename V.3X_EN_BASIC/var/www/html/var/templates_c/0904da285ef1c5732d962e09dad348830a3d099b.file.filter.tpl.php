<?php /* Smarty version Smarty-3.1.21, created on 2017-03-02 11:03:20
         compiled from "/var/www/html/modules/billing_report/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186933506958b77d68668ab4-24662544%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0904da285ef1c5732d962e09dad348830a3d099b' => 
    array (
      0 => '/var/www/html/modules/billing_report/themes/default/filter.tpl',
      1 => 1468305274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186933506958b77d68668ab4-24662544',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date_start' => 0,
    'date_end' => 0,
    'filter_field' => 0,
    'style_text' => 0,
    'filter_value' => 0,
    'style_time' => 0,
    'horas' => 0,
    'minutos' => 0,
    'segundos' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58b77d686ae033_08176563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77d686ae033_08176563')) {function content_58b77d686ae033_08176563($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
:</td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['filter_field']->value['LABEL'];?>
:</td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['filter_field']->value['INPUT'];?>
</td>
        <td colspan="2">
            <span id="textfield" <?php echo $_smarty_tpl->tpl_vars['style_text']->value;?>
><?php echo $_smarty_tpl->tpl_vars['filter_value']->value['INPUT'];?>
</span>
            <span id="duration" <?php echo $_smarty_tpl->tpl_vars['style_time']->value;?>
>
                    <?php echo $_smarty_tpl->tpl_vars['horas']->value['INPUT'];?>
&nbsp;H&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['minutos']->value['INPUT'];?>
&nbsp;M&nbsp;
                    <?php echo $_smarty_tpl->tpl_vars['segundos']->value['INPUT'];?>
&nbsp;S&nbsp;
            </span>
        </td>
        <td align="left"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" /></td>
    </tr>
</table>
<?php }} ?>
