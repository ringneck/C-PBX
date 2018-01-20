<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 00:28:47
         compiled from "/var/www/html/modules/callcenter_config/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91466073586d14af0fa075-00700378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '677189b03858688245b7069234a5bf885d2a9c6b' => 
    array (
      0 => '/var/www/html/modules/callcenter_config/themes/default/form.tpl',
      1 => 1412118873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91466073586d14af0fa075-00700378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FRAMEWORK_TIENE_TITULO_MODULO' => 0,
    'icon' => 0,
    'title' => 0,
    'SAVE' => 0,
    'REQUIRED_FIELD' => 0,
    'ASTERISK_CONNECT_PARAM' => 0,
    'asterisk_asthost' => 0,
    'asterisk_astuser' => 0,
    'asterisk_astpass_1' => 0,
    'asterisk_astpass_2' => 0,
    'asterisk_duracion_sesion' => 0,
    'DIALER_PARAM' => 0,
    'dialer_llamada_corta' => 0,
    'dialer_tiempo_contestar' => 0,
    'dialer_qos' => 0,
    'dialer_timeout_originate' => 0,
    'dialer_timeout_inactivity' => 0,
    'dialer_debug' => 0,
    'dialer_allevents' => 0,
    'dialer_overcommit' => 0,
    'dialer_predictivo' => 0,
    'DIALER_STATUS_MESG' => 0,
    'CURRENT_STATUS' => 0,
    'DIALER_STATUS' => 0,
    'DIALER_ACTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d14af157509_95264635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d14af157509_95264635')) {function content_586d14af157509_95264635($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
<?php if (!$_smarty_tpl->tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']->value) {?>
    <tr class="moduleTitle">
        <td class="moduleTitle" valign="middle">&nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle" />&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td>
        <td></td>
    </tr>
<?php }?>    
    <tr class="letra12">
        <td align="left"><input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
"></td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
    </tr>
</table>
<table class="tabForm" width="100%"><tr>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $_smarty_tpl->tpl_vars['ASTERISK_CONNECT_PARAM']->value;?>
</b></td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_asthost']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_asthost']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astuser']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astuser']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astpass_1']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astpass_1']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astpass_2']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_astpass_2']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_duracion_sesion']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['asterisk_duracion_sesion']->value['INPUT'];?>
</td></tr>
</table>
</td>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $_smarty_tpl->tpl_vars['DIALER_PARAM']->value;?>
</b></td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_llamada_corta']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_llamada_corta']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_tiempo_contestar']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_tiempo_contestar']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_qos']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_qos']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_timeout_originate']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_timeout_originate']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_timeout_inactivity']->value['LABEL'];?>
:</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_timeout_inactivity']->value['INPUT'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_debug']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['dialer_debug']->value['LABEL'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_allevents']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['dialer_allevents']->value['LABEL'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_overcommit']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['dialer_overcommit']->value['LABEL'];?>
</td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['dialer_predictivo']->value['INPUT'];?>
 <?php echo $_smarty_tpl->tpl_vars['dialer_predictivo']->value['LABEL'];?>
</td></tr>
</table>
</td>
<td valign="top">
<table>
<tr class="letra12"><td><b><?php echo $_smarty_tpl->tpl_vars['DIALER_STATUS_MESG']->value;?>
</b></td></tr>
<tr class="letra12"><td><?php echo $_smarty_tpl->tpl_vars['CURRENT_STATUS']->value;?>
: <b><?php echo $_smarty_tpl->tpl_vars['DIALER_STATUS']->value;?>
</b></td></tr>
<tr class="letra12"><td><input class="button" type="submit" name="dialer_action" value="<?php echo $_smarty_tpl->tpl_vars['DIALER_ACTION']->value;?>
"/></td></tr>
</table>
</td>
</tr></table><?php }} ?>
