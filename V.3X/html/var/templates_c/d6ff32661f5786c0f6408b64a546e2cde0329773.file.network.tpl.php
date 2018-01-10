<?php /* Smarty version Smarty-3.1.21, created on 2018-01-04 09:59:33
         compiled from "/var/www/html/modules/network_parameters/themes/default/network.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19067818565a213ef5cb22b3-23781894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6ff32661f5786c0f6408b64a546e2cde0329773' => 
    array (
      0 => '/var/www/html/modules/network_parameters/themes/default/network.tpl',
      1 => 1515027573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19067818565a213ef5cb22b3-23781894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213ef5d52512_59613022',
  'variables' => 
  array (
    'mode' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'EDIT_PARAMETERS' => 0,
    'REQUIRED_FIELD' => 0,
    'host' => 0,
    'dns1' => 0,
    'gateway' => 0,
    'dns2' => 0,
    'ETHERNET_INTERFASES_LIST' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213ef5d52512_59613022')) {function content_5a213ef5d52512_59613022($_smarty_tpl) {?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
          <input class="button" type="submit" name="save_network_changes" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" >
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
"></td>
          <?php } else { ?>
          <input class="button" type="submit" name="edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT_PARAMETERS']->value;?>
"></td>
          <?php }?>          
        <td align="right" nowrap> <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?> <span class="letra12"> <span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span> <?php }?></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
	<td width="15%"><?php echo $_smarty_tpl->tpl_vars['host']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?> <span  class="required">*</span> <?php }?></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['host']->value['INPUT'];?>
</td>
	<td width="20%"><?php echo $_smarty_tpl->tpl_vars['dns1']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?> <span  class="required">*</span> <?php }?></td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['dns1']->value['INPUT'];?>
</td>
      </tr>
      <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['gateway']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?> <span  class="required">*</span><?php }?></td>
	<td><?php echo $_smarty_tpl->tpl_vars['gateway']->value['INPUT'];?>
</td>
	<td width="20%"><?php echo $_smarty_tpl->tpl_vars['dns2']->value['LABEL'];?>
: </td>
	<td width="30%"><?php echo $_smarty_tpl->tpl_vars['dns2']->value['INPUT'];?>
</td>
      </tr>
    </table>
  </td>
</tr>
</table>
</form>
<?php echo $_smarty_tpl->tpl_vars['ETHERNET_INTERFASES_LIST']->value;?>

<?php }} ?>
