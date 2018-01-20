<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 00:27:45
         compiled from "/var/www/html/modules/campaign_out/themes/default/load_contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433077391586d147152cf07-20620863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d5554e763a9ab3b909311761b7102d28c7ff37' => 
    array (
      0 => '/var/www/html/modules/campaign_out/themes/default/load_contacts.tpl',
      1 => 1459734041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433077391586d147152cf07-20620863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FRAMEWORK_TIENE_TITULO_MODULO' => 0,
    'icon' => 0,
    'title' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'REQUIRED_FIELD' => 0,
    'uploader' => 0,
    'LBL_OPTIONS_UPLOADER' => 0,
    'CONTENT_UPLOADER' => 0,
    'id_campaign' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d1471540434_74878813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d1471540434_74878813')) {function content_586d1471540434_74878813($_smarty_tpl) {?><form method="post" enctype="multipart/form-data">
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
    <table width="100%" valign="top" cellpadding="4" cellspacing="0" border="0">
      <tr>
        <td align="left">
          <input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" onclick="return enviar_datos();" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
" />
        </td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <?php echo $_smarty_tpl->tpl_vars['uploader']->value['LABEL'];?>
: <?php echo $_smarty_tpl->tpl_vars['uploader']->value['INPUT'];?>
<br/>
    <fieldset>
        <legend><?php echo $_smarty_tpl->tpl_vars['LBL_OPTIONS_UPLOADER']->value;?>
</legend>
        <?php echo $_smarty_tpl->tpl_vars['CONTENT_UPLOADER']->value;?>

    </fieldset>
  </td>
</tr>
</table>
<input type="hidden" name="id_campaign" id='id_campaign' value="<?php echo $_smarty_tpl->tpl_vars['id_campaign']->value;?>
" />
</form>
<?php }} ?>
