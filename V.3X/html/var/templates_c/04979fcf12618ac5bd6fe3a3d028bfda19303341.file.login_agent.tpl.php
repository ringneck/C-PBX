<?php /* Smarty version Smarty-3.1.21, created on 2017-12-01 20:59:47
         compiled from "/var/www/html/modules/agent_console/themes/default/login_agent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10798792225a2144334b0d55-48948935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04979fcf12618ac5bd6fe3a3d028bfda19303341' => 
    array (
      0 => '/var/www/html/modules/agent_console/themes/default/login_agent.tpl',
      1 => 1512109989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10798792225a2144334b0d55-48948935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTA_JQUERY_CSS' => 0,
    'CURR_ITEM' => 0,
    'NO_EXTENSIONS' => 0,
    'LABEL_NOEXTENSIONS' => 0,
    'NO_AGENTS' => 0,
    'LABEL_NOAGENTS' => 0,
    'MODULE_NAME' => 0,
    'WELCOME_AGENT' => 0,
    'ENTER_USER_PASSWORD' => 0,
    'ESTILO_FILA_ESTADO_LOGIN' => 0,
    'MSG_ESPERA' => 0,
    'USERNAME' => 0,
    'CALLBACK_EXTENSION' => 0,
    'LISTA_AGENTES' => 0,
    'ID_AGENT' => 0,
    'LISTA_EXTENSIONES_CALLBACK' => 0,
    'ID_EXTENSION_CALLBACK' => 0,
    'EXTENSION' => 0,
    'PASSWORD' => 0,
    'LISTA_EXTENSIONES' => 0,
    'ID_EXTENSION' => 0,
    'CALLBACK_LOGIN' => 0,
    'LABEL_SUBMIT' => 0,
    'REANUDAR_VERIFICACION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a214433585595_92765766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a214433585595_92765766')) {function content_5a214433585595_92765766($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
?>

<?php  $_smarty_tpl->tpl_vars['CURR_ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CURR_ITEM']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_JQUERY_CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CURR_ITEM']->key => $_smarty_tpl->tpl_vars['CURR_ITEM']->value) {
$_smarty_tpl->tpl_vars['CURR_ITEM']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['CURR_ITEM']->value[0]=='css') {?>
<link rel="stylesheet" href='<?php echo $_smarty_tpl->tpl_vars['CURR_ITEM']->value[1];?>
' />
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CURR_ITEM']->value[0]=='js') {?>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo $_smarty_tpl->tpl_vars['CURR_ITEM']->value[1];?>
'><?php echo '</script'; ?>
>
    <?php }?>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['NO_EXTENSIONS']->value) {?>
<p><h4 align="center"><?php echo $_smarty_tpl->tpl_vars['LABEL_NOEXTENSIONS']->value;?>
</h4></p>
<?php } elseif ($_smarty_tpl->tpl_vars['NO_AGENTS']->value) {?>
<p><h4 align="center"><?php echo $_smarty_tpl->tpl_vars['LABEL_NOAGENTS']->value;?>
</h4></p>
<?php } else { ?>
<form method="POST"  action="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" onsubmit="do_login(); return false;">

<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="400" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="498"  class="menudescription">
      <table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
        <tr>
          <td class="menudescription2">
              <div align="left"><font color="#ffffff">&nbsp;&raquo;&nbsp;<?php echo $_smarty_tpl->tpl_vars['WELCOME_AGENT']->value;?>
</font></div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td width="498" bgcolor="#ffffff">
      <table width="100%" border="0" cellspacing="0" cellpadding="8" class="tabForm">
        <tr>
          <td colspan="2">
            <div align="center"><?php echo $_smarty_tpl->tpl_vars['ENTER_USER_PASSWORD']->value;?>
<br/><br/></div>
          </td>
        </tr>
        <tr id="login_fila_estado" <?php echo $_smarty_tpl->tpl_vars['ESTILO_FILA_ESTADO_LOGIN']->value;?>
>
          <td colspan="2">
            <div align="center" id="login_icono_espera" height='1'><img id="reloj" src="modules/<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
/images/loading.gif" border="0" alt=""></div>
            <div align="center" style="font-weight: bold;" id="login_msg_espera"><?php echo $_smarty_tpl->tpl_vars['MSG_ESPERA']->value;?>
</div>
            <div align="center" id="login_msg_error" style="color: #ff0000;"></div>
          </td>
        </tr>
        <tr>
          <td width="40%">
              <div align="right" id="label_agent_user"><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
:</div>
              <div align="right" id="label_extension_callback"><?php echo $_smarty_tpl->tpl_vars['CALLBACK_EXTENSION']->value;?>
:</div>
          </td>
          <td width="60%">
                <select align="center" id="input_agent_user" name="input_agent_user">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['LISTA_AGENTES']->value,'selected'=>$_smarty_tpl->tpl_vars['ID_AGENT']->value),$_smarty_tpl);?>

                </select>
                <select align="center" id="input_extension_callback" name="input_extension_callback">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['LISTA_EXTENSIONES_CALLBACK']->value,'selected'=>$_smarty_tpl->tpl_vars['ID_EXTENSION_CALLBACK']->value),$_smarty_tpl);?>

                </select>
          </td>
        </tr>
        <tr>
          <td width="40%">
              <div align="right" id="label_extension"><?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value;?>
:</div>
              <div align="right" id="label_password_callback"><?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
:</div>
          </td>
          <td width="60%">
                <select align="center" name="input_extension" id="input_extension">
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['LISTA_EXTENSIONES']->value,'selected'=>$_smarty_tpl->tpl_vars['ID_EXTENSION']->value),$_smarty_tpl);?>

                </select>
		<input type="password" name="input_password_callback" id="input_password_callback">
          </td>
        </tr>
<!-- Begin: CallbackLogin checkbox -->
	<tr>
          <td width="40%">
              <div align="center"><b><?php echo $_smarty_tpl->tpl_vars['CALLBACK_LOGIN']->value;?>
 :</b></div>
          </td>
          <td width="60%">               
	      <input type="checkbox" name="input_callback" id="input_callback">
          </td>
        </tr>
<!-- End: CallbackLogin checkbox -->
        <tr>
          <td colspan="2" align="center">
            <input type="button" id="submit_agent_login" name="submit_agent_login" value="<?php echo $_smarty_tpl->tpl_vars['LABEL_SUBMIT']->value;?>
" class="button" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>

</form>

<?php if ($_smarty_tpl->tpl_vars['REANUDAR_VERIFICACION']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
do_checklogin();
<?php echo '</script'; ?>
>
<?php }?>
<?php }?>
<?php }} ?>
