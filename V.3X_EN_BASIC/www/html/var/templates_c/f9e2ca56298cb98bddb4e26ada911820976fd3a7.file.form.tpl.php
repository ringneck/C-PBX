<?php /* Smarty version Smarty-3.1.21, created on 2016-12-30 14:36:54
         compiled from "/var/www/html/modules/client/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11122563295865f27610f3b1-59528190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9e2ca56298cb98bddb4e26ada911820976fd3a7' => 
    array (
      0 => '/var/www/html/modules/client/themes/default/form.tpl',
      1 => 1374077751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11122563295865f27610f3b1-59528190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'FRAMEWORK_TIENE_TITULO_MODULO' => 0,
    'icon' => 0,
    'title' => 0,
    'LABEL_MESSAGE' => 0,
    'File' => 0,
    'ETIQUETA_SUBMIT' => 0,
    'Format_File' => 0,
    'Format_Content' => 0,
    'ETIQUETA_DOWNLOAD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5865f2761598c3_99846339',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5865f2761598c3_99846339')) {function content_5865f2761598c3_99846339($_smarty_tpl) {?><?php echo '<script'; ?>
 src="modules/<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
/libs/js/base.js"><?php echo '</script'; ?>
>
<table width="100%" cellpadding="1" cellspacing="1" height="100%" border=0>
<?php if (!$_smarty_tpl->tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']->value) {?>
    <tr class="moduleTitle">
        <td colspan="4" class="moduleTitle" align="left">
            <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        </td>
    </tr>
<?php }?>
    <tr>
        <td>
            <form style='margin-bottom:0;' method="post" action="?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" enctype="multipart/form-data">
            <table align='left' border="0" class="filterForm" cellspacing="0" cellpadding="0" width="100%">
                <tr><td class="letra12" colspan="2"><b><?php echo $_smarty_tpl->tpl_vars['LABEL_MESSAGE']->value;?>
</b></td></tr>
                <tr>
                    <td class="letra12" align="right" width="20%"><b><?php echo $_smarty_tpl->tpl_vars['File']->value;?>
:</b></td>
                    <td align='left'><input name="fileCRM" type="file" /></td>
                </tr>
                <tr>
                    <td align='left' colspan="2"><input class='button' type = 'submit' name='cargar_datos' value='<?php echo $_smarty_tpl->tpl_vars['ETIQUETA_SUBMIT']->value;?>
' onClick="return validarFile(this.form.fileCRM.value)" /></td>
                </tr>
                <tr>
                	<td class="letra12" align='left'><b><?php echo $_smarty_tpl->tpl_vars['Format_File']->value;?>
:</b></td>
                	<td class="letra12" align='left'><?php echo $_smarty_tpl->tpl_vars['Format_Content']->value;?>
</td>
               	</tr>
               	<tr>
               		<td class="letra12" align='left' colspan="2"><b><a href="?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&amp;rawmode=yes&amp;action=csvdownload"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_DOWNLOAD']->value;?>
&nbsp;&raquo;</a></b></tr>
               	</tr>
            </table>
            </form>
        </td>
    </tr>
</table>

<?php }} ?>
