<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 13:01:35
         compiled from "/var/www/html/modules/eccp_users/themes/default/edit-users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:932099566586dc51f572071-79939817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78163625d79852b63c18319c975104d49325237a' => 
    array (
      0 => '/var/www/html/modules/eccp_users/themes/default/edit-users.tpl',
      1 => 1320178919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '932099566586dc51f572071-79939817',
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
    'username' => 0,
    'password1' => 0,
    'password2' => 0,
    'id_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586dc51f5ba102_63140364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586dc51f5ba102_63140364')) {function content_586dc51f5ba102_63140364($_smarty_tpl) {?><form method="post">
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
          <input class="button" type="submit" name="submit_save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
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
	<td><?php echo $_smarty_tpl->tpl_vars['username']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td><?php echo $_smarty_tpl->tpl_vars['username']->value['INPUT'];?>
</td>
      </tr>
<?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['password1']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td><?php echo $_smarty_tpl->tpl_vars['password1']->value['INPUT'];?>
</td>
       </tr>
       <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['password2']->value['LABEL'];?>
: <span class="required">*</span></td>
	<td><?php echo $_smarty_tpl->tpl_vars['password2']->value['INPUT'];?>
</td>
      </tr>
<?php }?>
    </table>
  </td>
</tr>
</table>
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id_user']->value;?>
" />
</form>




<?php }} ?>
