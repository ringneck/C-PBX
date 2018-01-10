<?php /* Smarty version Smarty-3.1.21, created on 2017-12-01 20:28:31
         compiled from "/var/www/html/modules/form_designer/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7998943805a213cdf49c3c7-37954022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ed2034c2c498fe8623a4c4ef35f7412d1a61ba1' => 
    array (
      0 => '/var/www/html/modules/form_designer/themes/default/form.tpl',
      1 => 1498022411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7998943805a213cdf49c3c7-37954022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SAVE' => 0,
    'CANCEL' => 0,
    'form_nombre' => 0,
    'style_field' => 0,
    'form_description' => 0,
    'LABEL_ORDER' => 0,
    'LABEL_NAME' => 0,
    'LABEL_TYPE' => 0,
    'LABEL_ENUMVAL' => 0,
    'TOOLTIP_DRAGDROP' => 0,
    'LABEL_NEWFIELD' => 0,
    'CMB_TIPO' => 0,
    'LABEL_FFADD' => 0,
    'LABEL_FFDEL' => 0,
    'id_formulario' => 0,
    'CAMPOS_FORM' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213cdf546070_24258049',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213cdf546070_24258049')) {function content_5a213cdf546070_24258049($_smarty_tpl) {?><!-- end of Message board -->
<form method="POST" name="form_formulario">
    <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>
                <table width="100%" cellpadding="3" cellspacing="0" border="0">
                    <tr>
                        <td align="left">
                        <input class="button" type="button" name="apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" />
                        <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                    <tr>
                        <td align="right" valign="top"><?php echo $_smarty_tpl->tpl_vars['form_nombre']->value['LABEL'];?>
: <span  class="required" <?php echo $_smarty_tpl->tpl_vars['style_field']->value;?>
>*</span></td>
                        <td valign="top"><?php echo $_smarty_tpl->tpl_vars['form_nombre']->value['INPUT'];?>
</td>
                    </tr>
                    <tr>
	                    <td align="right" valign="top"><?php echo $_smarty_tpl->tpl_vars['form_description']->value['LABEL'];?>
:</td>
	                    <td valign="top"><?php echo $_smarty_tpl->tpl_vars['form_description']->value['INPUT'];?>
</td>
                    </tr>
                    <tr><td colspan="2">
<table class="formfield_list" border='0' cellspacing='0' cellpadding='0' width='100%' align='center'>
<thead>
<tr>
    <td width="50"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_ORDER']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_NAME']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_TYPE']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_ENUMVAL']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
    <td width="40">&nbsp;</td>
</tr>
</thead>
<tbody id="tbody_fieldlist">
<tr title="<?php echo $_smarty_tpl->tpl_vars['TOOLTIP_DRAGDROP']->value;?>
">
    <td valign="top"><span class="formfield_order">?</span><input type="hidden" name="formfield_id" value="" /></td>
    <td valign="top" class='formfield_name'><input type="text" name="formfield_name" value="(no name)" placeholder="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_NEWFIELD']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
    <td valign="top" class='formfield_type'><select><?php echo $_smarty_tpl->tpl_vars['CMB_TIPO']->value;?>
</select></td>
    <td valign="top" class='formfield_enumval'>
        <span class="formfield_enumval_wrap">
            <span class="formfield_enumval_passive"></span>
            <div class="formfield_enumval_active">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td rowspan='2' valign="top" width="50"><input type="text" name="formfield_enumlist_newitem" id='formfield_enumlist_newitem' value="" /></td>
                        <td valign="top" width="40"><input class="button" type="button" name="formfield_additem" value=">>"/></td>
                        <td rowspan='2' valign="top">
                            <select name="formfield_enumlist_items" size="4" class="formfield_enumlist_items" style="width:120px"></select>
                        </td>
                    </tr>
                    <tr>
                        <td width="40"><input class="button" type="button" name="formfield_delitem" value="<<" /></td>
                    </tr>
                </table>
            </div>
        </span>
    </td>
    <td class='formfield_order'><input class="button" type="button" name="formfield_add" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_FFADD']->value, ENT_QUOTES, 'UTF-8', true);?>
" /><input class="button" type="button" name="formfield_del" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LABEL_FFDEL']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
</tr>
</tbody>
</table>            
                    </td></tr>
                </table>
            </td>
        </tr>
    </table>
    <?php echo $_smarty_tpl->tpl_vars['id_formulario']->value['INPUT'];?>

</form>
<?php echo '<script'; ?>
 type="text/javascript">
CAMPOS_FORM = <?php echo $_smarty_tpl->tpl_vars['CAMPOS_FORM']->value;?>
;
<?php echo '</script'; ?>
><?php }} ?>
