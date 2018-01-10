<?php /* Smarty version Smarty-3.1.21, created on 2017-12-22 00:00:35
         compiled from "/var/www/html/modules/backup_restore/themes/default/backup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13755465285a21312e9bade9-53113892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a6155025d0711d2e7d0335e66c429c9cff64b06' => 
    array (
      0 => '/var/www/html/modules/backup_restore/themes/default/backup.tpl',
      1 => 1513863232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13755465285a21312e9bade9-53113892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a21312eb27052_66978142',
  'variables' => 
  array (
    'ERROR_MSG' => 0,
    'PROCESS' => 0,
    'BACK' => 0,
    'WARNING' => 0,
    'LBL_TODOS' => 0,
    'ENDPOINT' => 0,
    'TODO_ENDPOINT' => 0,
    'backup_endpoint' => 0,
    'item' => 0,
    'key' => 0,
    'FAX' => 0,
    'TODO_FAX' => 0,
    'backup_fax' => 0,
    'EMAIL' => 0,
    'TODO_EMAIL' => 0,
    'backup_email' => 0,
    'ASTERISK' => 0,
    'TODO_ASTERISK' => 0,
    'backup_asterisk' => 0,
    'OTROS' => 0,
    'TODO_OTROS' => 0,
    'backup_otros' => 0,
    'OTROS_NEW' => 0,
    'TODO_OTROS_NEW' => 0,
    'backup_otros_new' => 0,
    'OPTION_URL' => 0,
    'BACKUP_FILE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21312eb27052_66978142')) {function content_5a21312eb27052_66978142($_smarty_tpl) {?>

<?php echo '<script'; ?>
 type="text/javascript">

function ChequearTodos(chkbox)
{
    for (var i=0;i < document.getElementById("backup_form").elements.length;i++)
    {
        var elemento = document.getElementById("backup_form").elements[i];
        if (elemento.type == "checkbox")
        {
            if(!elemento.disabled)
                elemento.checked = chkbox.checked
        }
    }
}
function ChequearTabla(chkbox, id)
{
    //Si desmarco el checkbox desmarcar all options global
    if(!chkbox.checked)
        document.getElementById('backup_total').checked = chkbox.checked;

    var arr_chk = document.getElementById(id).getElementsByTagName("INPUT");
    for(var i=0; i<arr_chk.length; i++)
    {
        if(!arr_chk[i].disabled)
            arr_chk[i].checked = chkbox.checked;
    }
}
function VerificarCheck(chkbox, id)
{
    if(!chkbox.checked)
    {
        //Descarmar all options de la tabla
        document.getElementById(id).checked = chkbox.checked;
        //Descarmar all options global
        document.getElementById('backup_total').checked = chkbox.checked;
    }
}
function popup_dif(content_popup)
{
	var ancho = 800;
        var alto = 110;
	var winiz = (screen.width-ancho)/2;
	var winal = (screen.height-alto)/2;	
	my_window = window.open(content_popup,"my_window","width="+ancho+",height="+alto+",top="+winal+",left="+winiz+",location=no,status=no,resizable=no,scrollbars=no,fullscreen=no,toolbar=no,directories=no");
        my_window.document.close();
}
<?php echo '</script'; ?>
>

<form method="POST" enctype="multipart/form-data" id="backup_form">
    <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>
                <table width="100%" cellpadding="4" cellspacing="0" border="0">
                    <tr>
                        <td align="left"><?php echo $_smarty_tpl->tpl_vars['ERROR_MSG']->value;?>
</td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input class="button" type="submit" name="process" value="<?php echo $_smarty_tpl->tpl_vars['PROCESS']->value;?>
">
                            <input class="button" type="submit" name="back" value="<?php echo $_smarty_tpl->tpl_vars['BACK']->value;?>
">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['WARNING']->value;?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="99%" BORDER=0>
                    <tr>
                        <td colspan=4><INPUT type="checkbox" name="backup_total" id="backup_total" onClick=ChequearTodos(this);><b><?php echo $_smarty_tpl->tpl_vars['LBL_TODOS']->value;?>
</b></td>
                    </tr>
                    <tr>
                    <!-- ********** E N D   P O I N T ************ -->
                        <td width="25%">
                            <table id="table_endpoint" width="100%" height="100px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $_smarty_tpl->tpl_vars['ENDPOINT']->value;?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_endpoint" id="backup_endpoint" onClick="ChequearTabla(this, 'table_endpoint');"><b><?php echo $_smarty_tpl->tpl_vars['TODO_ENDPOINT']->value;?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backup_endpoint']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $_smarty_tpl->tpl_vars['item']->value['disable'];?>
 name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onClick="VerificarCheck(this, 'backup_endpoint');" <?php echo $_smarty_tpl->tpl_vars['item']->value['check'];?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['msg'];?>
</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </td>
                    <!-- ********** F A X ************ -->
                        <!--OLSSOO<td width="25%">
                            <table id="table_fax" width="100%" height="100px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $_smarty_tpl->tpl_vars['FAX']->value;?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_fax" id="backup_fax" onClick="ChequearTabla(this, 'table_fax');"><b><?php echo $_smarty_tpl->tpl_vars['TODO_FAX']->value;?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backup_fax']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $_smarty_tpl->tpl_vars['item']->value['disable'];?>
 name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onClick="VerificarCheck(this, 'backup_fax');" <?php echo $_smarty_tpl->tpl_vars['item']->value['check'];?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['msg'];?>
</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </td>-->
                    <!-- ********** E M A I L ************ -->
                        <!--OLSSOO <td width="25%">
                            <table id="table_email" width="100%" height="100px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_email" id="backup_email" onClick="ChequearTabla(this, 'table_email');"><b><?php echo $_smarty_tpl->tpl_vars['TODO_EMAIL']->value;?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backup_email']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $_smarty_tpl->tpl_vars['item']->value['disable'];?>
 name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onClick="VerificarCheck(this, 'backup_email');" <?php echo $_smarty_tpl->tpl_vars['item']->value['check'];?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['msg'];?>
</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    <tr>-->
                    <!-- ********** A S T E R I X ************ -->
                        <td width="25%">
                            <table id="table_asterisk" width="100%" height="270px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $_smarty_tpl->tpl_vars['ASTERISK']->value;?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_asterisk" id="backup_asterisk" onClick="ChequearTabla(this, 'table_asterisk');"><b><?php echo $_smarty_tpl->tpl_vars['TODO_ASTERISK']->value;?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backup_asterisk']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $_smarty_tpl->tpl_vars['item']->value['disable'];?>
 name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onClick="VerificarCheck(this, 'backup_asterisk');" <?php echo $_smarty_tpl->tpl_vars['item']->value['check'];?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['msg'];?>
</td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </td>
                    <!-- ********** O T H E R S ************ -->
                        <td width="25%">
                            <table id="table_others" width="100%" height="270px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $_smarty_tpl->tpl_vars['OTROS']->value;?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_others" id="backup_others" onClick="ChequearTabla(this, 'table_others');"><b><?php echo $_smarty_tpl->tpl_vars['TODO_OTROS']->value;?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backup_otros']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $_smarty_tpl->tpl_vars['item']->value['disable'];?>
 name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onClick="VerificarCheck(this, 'backup_others');" <?php echo $_smarty_tpl->tpl_vars['item']->value['check'];?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['msg'];?>
</td>
                                    </tr>
                                    <?php } ?>
									<tr><td height="20px">&nbsp;</td></tr>
                                </tbody>
                            </table>
                        </td>
                    <!-- ********** N E W   O T H E R S ************ -->
                        <!--OLSSOO<td width="25%">
                            <table id="table_others_new" width="100%" height="270px" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                                <th>
                                    <tr>
                                        <td height="20px"><b><?php echo $_smarty_tpl->tpl_vars['OTROS_NEW']->value;?>
</b></td>
                                    </tr>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" name="backup_others_new" id="backup_others_new" onClick="ChequearTabla(this, 'table_others_new');"><b><?php echo $_smarty_tpl->tpl_vars['TODO_OTROS_NEW']->value;?>
</b></td>
                                    </tr>
                                </th>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['backup_otros_new']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                                    <tr>
                                        <td height="20px"><INPUT type="checkbox" <?php echo $_smarty_tpl->tpl_vars['item']->value['disable'];?>
 name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" onClick="VerificarCheck(this, 'backup_others_new');" <?php echo $_smarty_tpl->tpl_vars['item']->value['check'];?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['desc'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['msg'];?>
</td>
                                    </tr>
                                    <?php } ?>
									<tr><td height="20px">&nbsp;</td></tr>
									<tr><td height="20px">&nbsp;</td></tr>
									<tr><td height="20px">&nbsp;</td></tr>
                                </tbody>
                            </table>
                        </td>-->
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <INPUT type="hidden" name="option_url" id="option_url" value="<?php echo $_smarty_tpl->tpl_vars['OPTION_URL']->value;?>
">
    <input type='hidden' name='backup_file' value='<?php echo $_smarty_tpl->tpl_vars['BACKUP_FILE']->value;?>
'></td>
</form>
<?php }} ?>
