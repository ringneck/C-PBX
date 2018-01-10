<?php /* Smarty version Smarty-3.1.21, created on 2017-12-02 14:06:48
         compiled from "/var/www/html/modules/sec_advanced_settings/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18742986035a2234e875ed01-38153593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd5f9fcf51692f311c7d9f6ba0e4dedc335300e' => 
    array (
      0 => '/var/www/html/modules/sec_advanced_settings/themes/default/form.tpl',
      1 => 1498022405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18742986035a2234e875ed01-38153593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mode' => 0,
    'SAVE' => 0,
    'subtittle1' => 0,
    'status_fpbx_frontend' => 0,
    'FreePBX_copy_right' => 0,
    'value_fpbx_frontend' => 0,
    'status_anonymous_sip' => 0,
    'value_anonymous_sip' => 0,
    'subtittle2' => 0,
    'fpbx_password' => 0,
    'fpbx_confir_password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a2234e87fee52_50390599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2234e87fee52_50390599')) {function content_5a2234e87fee52_50390599($_smarty_tpl) {?><table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
        <td align="left">
            <input class="button" type="submit" name="update_advanced_security_settings" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;
        </td>
        <?php }?>
    </tr>
</table>
<table class="tabForm" style="font-size: 16px;" width="100%" >
    <tr>
	<td  width="50%" valign='top'>
	    <table>
		<tr class="letra12">
		    <td align="left"><b style ="color:#E35332; font-weigth:bold;font-size:13px;font-family:'Lucida Console';"><?php echo $_smarty_tpl->tpl_vars['subtittle1']->value;?>
</b></td>
		</tr>
		<tr class="letra12">
		    <td align="left" >
                        <b><?php echo $_smarty_tpl->tpl_vars['status_fpbx_frontend']->value['LABEL'];?>
:</b><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['FreePBX_copy_right']->value;?>
">?</a>
                    </td>
		    <td align="left" ><input type="hidden" name="oldstatus_fpbx_frontend" id="oldstatus_fpbx_frontend" value="<?php if ($_smarty_tpl->tpl_vars['value_fpbx_frontend']->value) {?>1<?php } else { ?>0<?php }?>" /><input type="checkbox" name="status_fpbx_frontend" id="status_fpbx_frontend" <?php if ($_smarty_tpl->tpl_vars['value_fpbx_frontend']->value) {?>checked="checked"<?php }?> /></td>
		</tr>
        <tr class="letra12">
            <td align="left" ><b><?php echo $_smarty_tpl->tpl_vars['status_anonymous_sip']->value['LABEL'];?>
:</b></td>
            <td align="left" ><input type="hidden" name="oldstatus_anonymous_sip" id="oldstatus_anonymous_sip" value="<?php if ($_smarty_tpl->tpl_vars['value_anonymous_sip']->value) {?>1<?php } else { ?>0<?php }?>" /><input type="checkbox" name="status_anonymous_sip" id="status_anonymous_sip" <?php if ($_smarty_tpl->tpl_vars['value_anonymous_sip']->value) {?>checked="checked"<?php }?> /></td>
        </tr>
	    </table>
	</td>
	<td width="50%" valign='top'>
	    <table>
		<tr class="letra12">
		    <td align="left"><b style ="color:#E35332; font-weigth:bold;font-size:13px;font-family:'Lucida Console';"><?php echo $_smarty_tpl->tpl_vars['subtittle2']->value;?>
</b></td>
		</tr>
		<tr class="letra12">
		    <td align="left" >
                        <b><?php echo $_smarty_tpl->tpl_vars['fpbx_password']->value['LABEL'];?>
:</b><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['FreePBX_copy_right']->value;?>
">?</a>                        
                    </td>
		    <td align="left" ><?php echo $_smarty_tpl->tpl_vars['fpbx_password']->value['INPUT'];?>
</td>
		</tr>
		<tr class="letra12">
		    <td align="left" ><b><?php echo $_smarty_tpl->tpl_vars['fpbx_confir_password']->value['LABEL'];?>
:</b></td>
		    <td align="left" ><?php echo $_smarty_tpl->tpl_vars['fpbx_confir_password']->value['INPUT'];?>
</td>
		</tr>
	    </table>
	</td>
    </tr>
</table>
                <?php }} ?>
