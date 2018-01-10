<?php /* Smarty version Smarty-3.1.21, created on 2017-03-02 11:03:44
         compiled from "/var/www/html/modules/billing_setup/themes/default/default_rate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186589424658b77d802b9e26-52590280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23ac49b5f5fe6d0502c71be5932e50f9ded4c860' => 
    array (
      0 => '/var/www/html/modules/billing_setup/themes/default/default_rate.tpl',
      1 => 1468305280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186589424658b77d802b9e26-52590280',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'REQUIRED_FIELD' => 0,
    'EDIT' => 0,
    'default_rate' => 0,
    'default_rate_offset' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58b77d802f7c66_85121968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77d802f7c66_85121968')) {function content_58b77d802f7c66_85121968($_smarty_tpl) {?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">

<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
          <input class="button" type="submit" name="save_default" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
	  <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
          <?php } else { ?>
          <img src="images/1x1.gif" border="0" align="absmiddle">&nbsp;&nbsp;
          <input class="button" type="submit" name="edit_default" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
"></td>
          <?php }?>          
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['default_rate']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?><span  class="required">*</span><?php }?></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['default_rate']->value['INPUT'];?>
</td>
      </tr>
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['default_rate_offset']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?><span  class="required">*</span><?php }?></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['default_rate_offset']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form><?php }} ?>
