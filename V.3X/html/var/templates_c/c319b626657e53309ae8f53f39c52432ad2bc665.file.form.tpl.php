<?php /* Smarty version Smarty-3.1.21, created on 2017-12-01 21:45:41
         compiled from "/var/www/html/modules/queues/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10066871425a214ef5742137-39129586%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c319b626657e53309ae8f53f39c52432ad2bc665' => 
    array (
      0 => '/var/www/html/modules/queues/themes/default/form.tpl',
      1 => 1498022407,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10066871425a214ef5742137-39129586',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'relative_dir_rich_text' => 0,
    'FRAMEWORK_TIENE_TITULO_MODULO' => 0,
    'icon' => 0,
    'title' => 0,
    'CANCEL' => 0,
    'SAVE' => 0,
    'select_queue' => 0,
    'script' => 0,
    'mode' => 0,
    'rte_script' => 0,
    'id_queue' => 0,
    'queue' => 0,
    'estatus_cbo_estado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a214ef57e1c15_67934275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a214ef57e1c15_67934275')) {function content_5a214ef57e1c15_67934275($_smarty_tpl) {?><?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relative_dir_rich_text']->value;?>
/richtext/html2xhtml.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relative_dir_rich_text']->value;?>
/richtext/richtext_compressed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
//Usage: initRTE(imagesPath, includesPath, cssFile, genXHTML, encHTML)
initRTE("./<?php echo $_smarty_tpl->tpl_vars['relative_dir_rich_text']->value;?>
/richtext/images/", "./<?php echo $_smarty_tpl->tpl_vars['relative_dir_rich_text']->value;?>
/richtext/", "", true);
var rte_script = new richTextEditor('rte_script');
<?php echo '</script'; ?>
>
<form method="POST" enctype="multipart/form-data" onsubmit="return submitForm();">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<?php if (!$_smarty_tpl->tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']->value) {?>
<tr class="moduleTitle">
    <td class="moduleTitle" valign="middle">&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td>
</tr>
<?php }?>
<tr>
    <td>
        <table width="100%" cellpadding="4" cellspacing="0" border="0">
        <tr>
            <td align="left">
                <input class="button" type="submit" name="cancel" value="&laquo; <?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
" />
                <input class="button" type="submit" name="save"   value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" />
            </td>
        </tr>
        </table>
    </td>
</tr>

<tr>
    <td>
        <table width="100%" cellspacing="0" cellpadding="0" class="tabForm">
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['select_queue']->value['LABEL'];?>
<span  class="required">*</span></td>
            <td><?php echo $_smarty_tpl->tpl_vars['select_queue']->value['INPUT'];?>
</td>
        </tr>        
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['script']->value['LABEL'];?>
: <span  class="required">*</span></td>
            <td> 
                <?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit'||$_smarty_tpl->tpl_vars['mode']->value=='input') {?>
                <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
                    rte_script.html ="<?php echo $_smarty_tpl->tpl_vars['rte_script']->value;?>
";
                    rte_script.toggleSrc = false;
                    rte_script.build();
                <?php echo '</script'; ?>
>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['script']->value['INPUT'];?>

                <?php }?> 
            </td>
        </tr>
        </table>
        
    </td>
</tr>
</table>
<input type="hidden" name="id_queue" id='id_queue' value="<?php echo $_smarty_tpl->tpl_vars['id_queue']->value;?>
" />
<input type="hidden" name="queue"    id='queue'    value="<?php echo $_smarty_tpl->tpl_vars['queue']->value;?>
"    />
<input type="hidden" name="estado" id='estado' value="<?php echo $_smarty_tpl->tpl_vars['estatus_cbo_estado']->value;?>
" />
</form>


<?php echo '<script'; ?>
 type="text/javascript">
function submitForm() {	
	updateRTEs();	
	return true;
}
<?php echo '</script'; ?>
>

<?php }} ?>
