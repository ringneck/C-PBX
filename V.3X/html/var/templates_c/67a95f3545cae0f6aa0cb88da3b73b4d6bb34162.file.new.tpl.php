<?php /* Smarty version Smarty-3.1.21, created on 2017-12-01 20:41:26
         compiled from "/var/www/html/modules/agents/themes/default/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18862041875a213fe6450919-01972612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67a95f3545cae0f6aa0cb88da3b73b4d6bb34162' => 
    array (
      0 => '/var/www/html/modules/agents/themes/default/new.tpl',
      1 => 1498022414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18862041875a213fe6450919-01972612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FRAMEWORK_TIENE_TITULO_MODULO' => 0,
    'icon' => 0,
    'title' => 0,
    'mode' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'APPLY_CHANGES' => 0,
    'EDIT' => 0,
    'DELETE' => 0,
    'CONFIRM_CONTINUE' => 0,
    'REQUIRED_FIELD' => 0,
    'extension' => 0,
    'description' => 0,
    'password1' => 0,
    'password2' => 0,
    'eccpwd1' => 0,
    'eccpwd2' => 0,
    'id_agent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213fe65149f6_83555885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213fe65149f6_83555885')) {function content_5a213fe65149f6_83555885($_smarty_tpl) {?><form method="post">
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
          <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
          <input class="button" type="submit" name="submit_save_agent" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"/>
          <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
          <input class="button" type="submit" name="submit_apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"/>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
"/>
          <input class="button" type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
"  onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"/>
          <?php }?>
        </td>
        <td align="right" nowrap><span  class="required">*</span> <span class="letra12"><?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
    <td width="20%"><?php echo $_smarty_tpl->tpl_vars['extension']->value['LABEL'];?>
: <span class="required">*</span></td>
    <td width="30%"><?php echo $_smarty_tpl->tpl_vars['extension']->value['INPUT'];?>
</td>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['description']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['description']->value['INPUT'];?>
</td>
      </tr>
<?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?>
      <tr>
	<td width="20%"><?php echo $_smarty_tpl->tpl_vars['password1']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['password1']->value['INPUT'];?>
</td>
	<td width="20%"><?php echo $_smarty_tpl->tpl_vars['password2']->value['LABEL'];?>
: <span class="required">*</span></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['password2']->value['INPUT'];?>
</td>
      </tr>
      <tr>
    <td width="20%"><?php echo $_smarty_tpl->tpl_vars['eccpwd1']->value['LABEL'];?>
:</td>
    <td width="30%"><?php echo $_smarty_tpl->tpl_vars['eccpwd1']->value['INPUT'];?>
</td>
    <td width="20%"><?php echo $_smarty_tpl->tpl_vars['eccpwd2']->value['LABEL'];?>
:</td>
    <td width="30%"><?php echo $_smarty_tpl->tpl_vars['eccpwd2']->value['INPUT'];?>
</td>
      </tr>
<?php }?>
    </table>
  </td>
</tr>
</table>
<input type="hidden" name="id_agent" value="<?php echo $_smarty_tpl->tpl_vars['id_agent']->value;?>
" />
</form>




<?php }} ?>
