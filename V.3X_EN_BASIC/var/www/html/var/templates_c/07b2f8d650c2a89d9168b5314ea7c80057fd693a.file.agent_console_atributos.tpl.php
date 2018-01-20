<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 00:51:41
         compiled from "/var/www/html/modules/agent_console/themes/default/agent_console_atributos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1191064604586d1a0dd19aa3-62717433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07b2f8d650c2a89d9168b5314ea7c80057fd693a' => 
    array (
      0 => '/var/www/html/modules/agent_console/themes/default/agent_console_atributos.tpl',
      1 => 1454099273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1191064604586d1a0dd19aa3-62717433',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LBL_NOMBRE_CAMPANIA' => 0,
    'TEXTO_NOMBRE_CAMPANIA' => 0,
    'LBL_CALL_ID' => 0,
    'TEXTO_CALL_ID' => 0,
    'CALLINFO_CALLTYPE' => 0,
    'LBL_CONTACTO_TELEFONO' => 0,
    'TEXTO_CONTACTO_TELEFONO' => 0,
    'LBL_CONTACTO_SELECT' => 0,
    'LISTA_CONTACTOS' => 0,
    'BTN_CONFIRMAR_CONTACTO' => 0,
    'LBL_CONTACTO_NOMBRES' => 0,
    'TEXTO_CONTACTO_NOMBRES' => 0,
    'ATRIBUTOS_LLAMADA' => 0,
    'ATRIBUTO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d1a0dd71b99_75704301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d1a0dd71b99_75704301')) {function content_586d1a0dd71b99_75704301($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
?><table border="0">
    <tbody>
        <tr>
            <td><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_NOMBRE_CAMPANIA']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_NOMBRE_CAMPANIA']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
        </tr>
        <tr>
            <td><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_CALL_ID']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CALL_ID']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
        </tr>
    <?php if ($_smarty_tpl->tpl_vars['CALLINFO_CALLTYPE']->value=='incoming') {?>
        <tr>
            <td><label for="llamada_entrante_contacto_telefono"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><span id="llamada_entrante_contacto_telefono"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
        </tr>
        <tr>
            <td><label for="llamada_entrante_contacto_id"><?php echo $_smarty_tpl->tpl_vars['LBL_CONTACTO_SELECT']->value;?>
: </label></td>
            <td>
              <select
                  name="llamada_entrante_contacto_id"
                  id="llamada_entrante_contacto_id"
                  class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only">
                  <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['LISTA_CONTACTOS']->value),$_smarty_tpl);?>

              </select>
              <button id="btn_confirmar_contacto"><?php echo $_smarty_tpl->tpl_vars['BTN_CONFIRMAR_CONTACTO']->value;?>
</button>
            </td>
        </tr>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CALLINFO_CALLTYPE']->value=='outgoing') {?>
        <tr>
            <td><label for="llamada_entrante_contacto_telefono"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><span id="llamada_entrante_contacto_telefono"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
        </tr>
        <tr>
            <td><label for="llamada_saliente_nombres"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_CONTACTO_NOMBRES']->value, ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><span id="llamada_saliente_nombres"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CONTACTO_NOMBRES']->value, ENT_QUOTES, 'UTF-8', true);?>
</span></td>
        </tr>
    <?php }?>
    <?php  $_smarty_tpl->tpl_vars['ATRIBUTO'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ATRIBUTO']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ATRIBUTOS_LLAMADA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ATRIBUTO']->key => $_smarty_tpl->tpl_vars['ATRIBUTO']->value) {
$_smarty_tpl->tpl_vars['ATRIBUTO']->_loop = true;
?>
        <tr>
            <td><label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ATRIBUTO']->value['label'], ENT_QUOTES, 'UTF-8', true);?>
: </label></td>
            <td><?php echo $_smarty_tpl->tpl_vars['ATRIBUTO']->value['value'];?>
</td>
        </tr>
    <?php } ?>
    </tbody>
</table><?php }} ?>
