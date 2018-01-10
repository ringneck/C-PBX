<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:55:34
         compiled from "/var/www/html/modules/network_parameters/themes/default/network_edit_interfase.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13337931255a3bbd56177ab1-74258448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf0118bc7a0f48da7c0dd5ab65b0cb98d917b2c' => 
    array (
      0 => '/var/www/html/modules/network_parameters/themes/default/network_edit_interfase.tpl',
      1 => 1513863234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13337931255a3bbd56177ab1-74258448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'APPLY_CHANGES' => 0,
    'CONFIRM_EDIT' => 0,
    'CANCEL' => 0,
    'EDIT_PARAMETERS' => 0,
    'REQUIRED_FIELD' => 0,
    'type' => 0,
    'ip' => 0,
    'mask' => 0,
    'dev_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a3bbd562309a9_93725987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3bbd562309a9_93725987')) {function content_5a3bbd562309a9_93725987($_smarty_tpl) {?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
          <input class="button" type="submit" name="save_interfase_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" 
                 onClick="return confirmSubmit('<?php echo $_smarty_tpl->tpl_vars['CONFIRM_EDIT']->value;?>
')">
          <input class="button" type="submit" name="cancel_interfase_edit" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
  "></td>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT_PARAMETERS']->value;?>
"></td>
          <?php }?>          
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['type']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['type']->value['INPUT'];?>
</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['ip']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['ip']->value['INPUT'];?>
</td>
	<td width="20%">&nbsp;</td>
	<td width="30%">&nbsp;</td>
      </tr>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['mask']->value['LABEL'];?>
: <span  class="required">*</span></td>
	<td><?php echo $_smarty_tpl->tpl_vars['mask']->value['INPUT'];?>
</td>
	<td width="20%">&nbsp; </td>
	<td width="30%">&nbsp;</td>
      </tr>
    </table>
  </td>
</tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['dev_id']->value['INPUT'];?>

</form>
<?php }} ?>
