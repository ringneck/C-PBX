<?php /* Smarty version Smarty-3.1.21, created on 2017-12-22 00:23:11
         compiled from "/var/www/html/modules/extensions_batch/themes/default/extension.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18173113025a213e40808618-13405605%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090b55f290df5e09b4f7ab040e43b4406536bad8' => 
    array (
      0 => '/var/www/html/modules/extensions_batch/themes/default/extension.tpl',
      1 => 1513863235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18173113025a213e40808618-13405605',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213e40869dc7_17489905',
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'LABEL_FILE' => 0,
    'LABEL_UPLOAD' => 0,
    'LABEL_DOWNLOAD' => 0,
    'LABEL_DELETE' => 0,
    'CONFIRM_DELETE' => 0,
    'HeaderFile' => 0,
    'AboutUpdate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213e40869dc7_17489905')) {function content_5a213e40869dc7_17489905($_smarty_tpl) {?><form  method='POST' enctype='multipart/form-data' style='margin-bottom:0;' action='?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
'>
<table width="99%" border="0">
<tbody>
<tr>
    <td align="right"><?php echo $_smarty_tpl->tpl_vars['LABEL_FILE']->value;?>
:</td>
    <td><input type='file' id='csvfile' name='csvfile' /></td>
    <td><input class="button" type="submit" name="csvupload" value="<?php echo $_smarty_tpl->tpl_vars['LABEL_UPLOAD']->value;?>
" /></td>
</tr>
<tr>
    <td colspan="2"><a class="link1" href="?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&amp;action=csvdownload&amp;rawmode=yes"><?php echo $_smarty_tpl->tpl_vars['LABEL_DOWNLOAD']->value;?>
</a></td>
    <td><input class='button' type='submit' name='delete_all' value='<?php echo $_smarty_tpl->tpl_vars['LABEL_DELETE']->value;?>
' onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_DELETE']->value;?>
');" /></td>
</tr>
<tr><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['HeaderFile']->value;?>
</td></tr>
<tr><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['AboutUpdate']->value;?>
</td></tr>
</tbody>
</table>
</form><?php }} ?>
