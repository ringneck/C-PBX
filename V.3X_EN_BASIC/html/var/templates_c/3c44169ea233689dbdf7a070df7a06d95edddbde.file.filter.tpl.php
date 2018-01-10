<?php /* Smarty version Smarty-3.1.21, created on 2017-03-18 17:58:03
         compiled from "/var/www/html/modules/summary_by_extension/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192156335758ccf69b75fc25-12247434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c44169ea233689dbdf7a070df7a06d95edddbde' => 
    array (
      0 => '/var/www/html/modules/summary_by_extension/themes/default/filter.tpl',
      1 => 1468305294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192156335758ccf69b75fc25-12247434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date_from' => 0,
    'option_fil' => 0,
    'value_fil' => 0,
    'SHOW' => 0,
    'date_to' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58ccf69b78ee13_67732550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ccf69b78ee13_67732550')) {function content_58ccf69b78ee13_67732550($_smarty_tpl) {?><table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td align="right" width="8%"><?php echo $_smarty_tpl->tpl_vars['date_from']->value['LABEL'];?>
:&nbsp;</td>
        <td align="left" width="13%"><?php echo $_smarty_tpl->tpl_vars['date_from']->value['INPUT'];?>
</td>
        <td align="right" width="7%"><?php echo $_smarty_tpl->tpl_vars['option_fil']->value['LABEL'];?>
:&nbsp;</td>
        <td align="left" width="22%"><?php echo $_smarty_tpl->tpl_vars['option_fil']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['value_fil']->value['INPUT'];?>
</td>
        <td align="left"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
"></td>
    </tr>
    <tr class="letra12">
        <td align="right" width="5%"><?php echo $_smarty_tpl->tpl_vars['date_to']->value['LABEL'];?>
:&nbsp;</td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['date_to']->value['INPUT'];?>
</td>
    </tr>
</table>


<?php echo '<script'; ?>
 type= "text/javascript">

function popup_ventana(url_popup)
{
    var ancho = 750;
    var alto = 580;
    var winiz = (screen.width-ancho)/2;
    var winal = (screen.height-alto)/2;
    my_window = window.open(url_popup,"my_window","width="+ancho+",height="+alto+",top="+winal+",left="+winiz+",location=yes,status=yes,resizable=yes,scrollbars=yes,fullscreen=no,toolbar=yes");
    my_window.document.close();
}

<?php echo '</script'; ?>
>

<?php }} ?>
