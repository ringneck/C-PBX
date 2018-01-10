<?php /* Smarty version Smarty-3.1.21, created on 2016-12-31 14:46:51
         compiled from "/var/www/html/modules/userlist/themes/default/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5412690325867464bbda963-96358193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a214336a9db6becedeaa7c751ea89ffe226574dc' => 
    array (
      0 => '/var/www/html/modules/userlist/themes/default/new.tpl',
      1 => 1479916886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5412690325867464bbda963-96358193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userExtension_success' => 0,
    'SAVE' => 0,
    'editUserExtension' => 0,
    'CANCEL' => 0,
    'mode' => 0,
    'REQUIRED_FIELD' => 0,
    'LBL_CORE_FIELDS' => 0,
    'name' => 0,
    'description' => 0,
    'password1' => 0,
    'password2' => 0,
    'group' => 0,
    'PLUGIN_CONTENT' => 0,
    'id_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5867464bc0e840_41733746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5867464bc0e840_41733746')) {function content_5867464bc0e840_41733746($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['userExtension_success']->value==1) {?>

<?php echo '<script'; ?>
 type="text/javascript">
if (window.opener && !window.opener.closed) {
    window.opener.location.reload();
}
window.close();
<?php echo '</script'; ?>
>

<?php } else { ?>
<form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <button class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
"><i class='fa fa-save'></i> <?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
</button>
          <?php if ($_smarty_tpl->tpl_vars['editUserExtension']->value!='yes') {?><input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"><?php }?>
        </td>
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
    <fieldset>
        <legend><b><?php echo $_smarty_tpl->tpl_vars['LBL_CORE_FIELDS']->value;?>
</b></legend>
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
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
    </fieldset>
    <?php echo $_smarty_tpl->tpl_vars['PLUGIN_CONTENT']->value;?>

  </td>
</tr>
</table>
<input type="hidden" name="id_user" value="<?php echo $_smarty_tpl->tpl_vars['id_user']->value;?>
">
</form>
<?php }?><?php }} ?>
