<?php /* Smarty version Smarty-3.1.21, created on 2018-01-09 15:11:23
         compiled from "/var/www/html/modules/userlist/themes/default/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5947573615a21318ab58a27-27447136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a214336a9db6becedeaa7c751ea89ffe226574dc' => 
    array (
      0 => '/var/www/html/modules/userlist/themes/default/new.tpl',
      1 => 1515478281,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5947573615a21318ab58a27-27447136',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a21318ac70ad8_11777923',
  'variables' => 
  array (
    'editUserExtension' => 0,
    'APPLY_CHANGES' => 0,
    'mode' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'userLevel1' => 0,
    'EDIT' => 0,
    'DELETE' => 0,
    'CONFIRM_CONTINUE' => 0,
    'REQUIRED_FIELD' => 0,
    'name' => 0,
    'description' => 0,
    'password1' => 0,
    'password2' => 0,
    'group' => 0,
    'extension' => 0,
    'THEMENAME' => 0,
    'title_webmail' => 0,
    'webmailuser' => 0,
    'webmaildomain' => 0,
    'webmailpassword1' => 0,
    'id_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21318ac70ad8_11777923')) {function content_5a21318ac70ad8_11777923($_smarty_tpl) {?><form method="POST" action="?menu=userlist">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
	  <?php if ($_smarty_tpl->tpl_vars['editUserExtension']->value=='yes') {?>
          <input class="button" type="button" name="submit_apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" onclick="apply_changes()">
          <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
          <button class="button" type="submit" name="submit_save_user" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
"><i class='fa fa-save'></i> <?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</button>
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
          <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
          <input class="button" type="submit" name="submit_apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
          <?php } elseif ($_smarty_tpl->tpl_vars['userLevel1']->value=='admin') {?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
">
          <input class="button" type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
"  onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')"></td>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
">
          <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?>
	  <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
	<?php }?>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="20%"><?php echo $_smarty_tpl->tpl_vars['name']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?><span  class="required">*</span><?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['name']->value['INPUT'];?>
</td>
	<td width="25%"><?php echo $_smarty_tpl->tpl_vars['description']->value['LABEL'];?>
:</td>
	<td width="25%"><?php echo $_smarty_tpl->tpl_vars['description']->value['INPUT'];?>
</td>
      </tr>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['password1']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?><span  class="required">*</span><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['password1']->value['INPUT'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['password2']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?><span class="required">*</span><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['password2']->value['INPUT'];?>
</td>
      </tr>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['group']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?><span  class="required">*</span><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['group']->value['INPUT'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['extension']->value['LABEL'];?>
:</td>
	<td><?php echo $_smarty_tpl->tpl_vars['extension']->value['INPUT'];?>
</td>
      </tr>
    </table>
 <!--<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr class="moduleTitle">
   <td class="moduleTitle" valign="middle"><?php if ($_smarty_tpl->tpl_vars['THEMENAME']->value=="elastixneo") {?><span class="neo-module-name" style="background:none;"><img src="images/email.png" width="22" height="22" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title_webmail']->value;?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['title_webmail']->value;
}?></td>
  </tr>
 </table>
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['webmailuser']->value['LABEL'];?>
: </td>
        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['webmailuser']->value['INPUT'];?>
</td>
        <td width="25%"><?php echo $_smarty_tpl->tpl_vars['webmaildomain']->value['LABEL'];?>
: </td>
        <td width="25%"><?php echo $_smarty_tpl->tpl_vars['webmaildomain']->value['INPUT'];?>
</td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['webmailpassword1']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['webmailpassword1']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>-->
<input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['id_user']->value;?>
">
</form><?php }} ?>
