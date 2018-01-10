<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:58:33
         compiled from "/var/www/html/modules/graphic_report/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7269520075a2e1e4628df91-83121352%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c5b9bca425749552376b28d72260bd5d9ff0003' => 
    array (
      0 => '/var/www/html/modules/graphic_report/themes/default/filter.tpl',
      1 => 1513863232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7269520075a2e1e4628df91-83121352',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a2e1e463176d2_29074543',
  'variables' => 
  array (
    'date_from' => 0,
    'classify_by' => 0,
    'date_to' => 0,
    'call_to' => 0,
    'HERE' => 0,
    'trunks' => 0,
    'SHOW' => 0,
    'ruta_img' => 0,
    'nav_value' => 0,
    'start_value' => 0,
    'date_1' => 0,
    'date_2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2e1e463176d2_29074543')) {function content_5a2e1e463176d2_29074543($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td width="30%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_from']->value['LABEL'];?>
:</b></td>
        <td width="20%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_from']->value['INPUT'];?>
 </td>
        <td width="20%" onload="show_elements();">
            <?php echo $_smarty_tpl->tpl_vars['classify_by']->value['INPUT'];?>

        </td>
    </tr>
    <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_to']->value['LABEL'];?>
: </td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_to']->value['INPUT'];?>
</td>

        <td align="left" nowrap id="td_link"><?php echo $_smarty_tpl->tpl_vars['call_to']->value['INPUT'];?>

            <!--OLSSOO <a href='javascript: popup_phone_number("?menu=calendar&action=phone_numbers&rawmode=yes");'><?php echo $_smarty_tpl->tpl_vars['HERE']->value;?>
</a>-->
        </td>
        <td id="id_vacio">&nbsp;</td>
        <td id="id_trunk"><?php echo $_smarty_tpl->tpl_vars['trunks']->value['INPUT'];?>
</td>

        <td><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
"></td>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" border="0" height="160px">
        <?php echo $_smarty_tpl->tpl_vars['ruta_img']->value;?>

</table>
<input type="hidden" name="nav" value="<?php echo $_smarty_tpl->tpl_vars['nav_value']->value;?>
" />
<input type="hidden" name="start" value="<?php echo $_smarty_tpl->tpl_vars['start_value']->value;?>
" />
<input type="hidden" name="date_1" value="<?php echo $_smarty_tpl->tpl_vars['date_1']->value;?>
" />
<input type="hidden" name="date_2" value="<?php echo $_smarty_tpl->tpl_vars['date_2']->value;?>
" />

<!--// solo para que pase el error llamado del popup --> 
<input type="hidden" name="phone_type" id="phone_type"  value="" />
<input type="hidden" name="phone_id" id="phone_id" value="" />


<?php echo '<script'; ?>
 type= "text/javascript">
    show_elements();
    function popup_phone_number(url_popup)
    {
        var ancho = 600;
        var alto = 400;
        var winiz = (screen.width-ancho)/2;
	var winal = (screen.height-alto)/2;
	my_window = window.open(url_popup,"my_window","width="+ancho+",height="+alto+",top="+winal+",left="+winiz+",location=yes,status=yes,resizable=yes,scrollbars=yes,fullscreen=no,toolbar=yes");
        my_window.document.close();
    }

    function show_elements()
    {
        var number = document.getElementById('classify_by');

        if( number.value == 'Number' )
        {
            document.getElementById('td_link').style.display = '';
            document.getElementById('id_trunk').style.display = 'none';
            document.getElementById('id_vacio').style.display = 'none';
        }
        else if( number.value == 'Queue' )
        {
            document.getElementById('td_link').style.display = 'none';
            document.getElementById('id_vacio').style.display = '';
            document.getElementById('id_trunk').style.display = 'none';
            
        }
        else
        {
            document.getElementById('td_link').style.display = 'none';
            document.getElementById('id_vacio').style.display = 'none';
            document.getElementById('id_trunk').style.display = '';
        }
    }
<?php echo '</script'; ?>
>


<?php }} ?>
