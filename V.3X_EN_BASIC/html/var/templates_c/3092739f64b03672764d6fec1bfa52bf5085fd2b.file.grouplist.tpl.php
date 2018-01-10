<?php /* Smarty version Smarty-3.1.21, created on 2016-12-31 14:48:23
         compiled from "/var/www/html/modules/grouplist/themes/default/grouplist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:546861507586746a700f025-20409074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3092739f64b03672764d6fec1bfa52bf5085fd2b' => 
    array (
      0 => '/var/www/html/modules/grouplist/themes/default/grouplist.tpl',
      1 => 1479916886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '546861507586746a700f025-20409074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'APPLY_CHANGES' => 0,
    'EDIT' => 0,
    'DELETE' => 0,
    'CONFIRM_CONTINUE' => 0,
    'REQUIRED_FIELD' => 0,
    'group' => 0,
    'description' => 0,
    'id_group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586746a7054d90_39251260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586746a7054d90_39251260')) {function content_586746a7054d90_39251260($_smarty_tpl) {?><form method="POST" action="?menu=grouplist">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
          <input class="button" type="submit" name="submit_save_group" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
          <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
          <input class="button" type="submit" name="submit_apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
">
          <input class="button" type="submit" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['DELETE']->value;?>
"  onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_CONTINUE']->value;?>
')"></td>
          <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?><td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td><?php }?>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['group']->value['LABEL'];?>
:<?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?> <span  class="required">*</span><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['group']->value['INPUT'];?>
</td>
        <td width="50%"></td>
      </tr>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['description']->value['LABEL'];?>
:<?php if ($_smarty_tpl->tpl_vars['mode']->value!='view') {?> <span  class="required">*</span><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['description']->value['INPUT'];?>
</td>
        <td width="50%"></td>
      </tr>
    </table>
  </td>
</tr>
</table>
<input type="hidden" name="id_group" value="<?php echo $_smarty_tpl->tpl_vars['id_group']->value;?>
">
</form>
<?php }} ?>
