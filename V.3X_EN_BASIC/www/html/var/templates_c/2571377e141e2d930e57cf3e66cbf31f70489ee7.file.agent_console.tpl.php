<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 00:51:35
         compiled from "/var/www/html/modules/agent_console/themes/default/agent_console.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1582257604586d1a0716fc47-77557997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2571377e141e2d930e57cf3e66cbf31f70489ee7' => 
    array (
      0 => '/var/www/html/modules/agent_console/themes/default/agent_console.tpl',
      1 => 1445626693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1582257604586d1a0716fc47-77557997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTA_JQUERY_CSS' => 0,
    'CURR_ITEM' => 0,
    'FRAMEWORK_TIENE_TITULO_MODULO' => 0,
    'icon' => 0,
    'title' => 0,
    'CLASS_ESTADO_AGENTE_INICIAL' => 0,
    'TEXTO_ESTADO_AGENTE_INICIAL' => 0,
    'CRONOMETRO' => 0,
    'BTN_COLGAR_LLAMADA' => 0,
    'CLASS_BOTON_BREAK' => 0,
    'BTN_BREAK' => 0,
    'BTN_TRANSFER' => 0,
    'CALLINFO_CALLTYPE' => 0,
    'BTN_AGENDAR_LLAMADA' => 0,
    'BTN_GUARDAR_FORMULARIOS' => 0,
    'BTN_VTIGERCRM' => 0,
    'BTN_FINALIZAR_LOGIN' => 0,
    'TAB_LLAMADA' => 0,
    'CUSTOM_PANELS' => 0,
    'HTML_PANEL' => 0,
    'TAB_LLAMADA_INFO' => 0,
    'CONTENIDO_LLAMADA_INFORMACION' => 0,
    'TAB_LLAMADA_SCRIPT' => 0,
    'CONTENIDO_LLAMADA_SCRIPT' => 0,
    'TAB_LLAMADA_FORM' => 0,
    'CONTENIDO_LLAMADA_FORMULARIO' => 0,
    'TITLE_BREAK_DIALOG' => 0,
    'LISTA_BREAKS' => 0,
    'TITLE_TRANSFER_DIALOG' => 0,
    'LBL_TRANSFER_BLIND' => 0,
    'LBL_TRANSFER_ATTENDED' => 0,
    'TITLE_SCHEDULE_CALL' => 0,
    'LBL_CONTACTO_TELEFONO' => 0,
    'TEXTO_CONTACTO_TELEFONO' => 0,
    'LBL_CONTACTO_NOMBRES' => 0,
    'TEXTO_CONTACTO_NOMBRES' => 0,
    'LBL_SCHEDULE_CAMPAIGN_END' => 0,
    'LBL_SCHEDULE_BYDATE' => 0,
    'LBL_SCHEDULE_DATE_START' => 0,
    'LBL_SCHEDULE_DATE_END' => 0,
    'LBL_SCHEDULE_TIME_START' => 0,
    'SCHEDULE_TIME_HH' => 0,
    'SCHEDULE_TIME_MM' => 0,
    'LBL_SCHEDULE_TIME_END' => 0,
    'LBL_SCHEDULE_SAME_AGENT' => 0,
    'APPLY_UI_STYLES' => 0,
    'INITIAL_CLIENT_STATE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d1a07205c67_14262533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d1a07205c67_14262533')) {function content_586d1a07205c67_14262533($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
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


<div
    id="elastix-callcenter-info-message"
    class="ui-state-highlight ui-corner-all">
    <p>
        <span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
        <span id="elastix-callcenter-info-message-text"></span>
    </p>
</div>

<div
    id="elastix-callcenter-error-message"
    class="ui-state-error ui-corner-all">
    <p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
        <span id="elastix-callcenter-error-message-text"></span>
    </p>
</div>

<div id="elastix-callcenter-area-principal">
    
<?php if (!$_smarty_tpl->tpl_vars['FRAMEWORK_TIENE_TITULO_MODULO']->value) {?>
    <div id="elastix-callcenter-titulo-consola" class="moduleTitle">&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle" alt="" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
<?php }?>
	
	<div id="elastix-callcenter-estado-agente" class="<?php echo $_smarty_tpl->tpl_vars['CLASS_ESTADO_AGENTE_INICIAL']->value;?>
">
	    <div id="elastix-callcenter-estado-agente-texto"><?php echo $_smarty_tpl->tpl_vars['TEXTO_ESTADO_AGENTE_INICIAL']->value;?>
</div>
        <div id="elastix-callcenter-cronometro"><?php echo $_smarty_tpl->tpl_vars['CRONOMETRO']->value;?>
</div>
    </div>
    <div id="elastix-callcenter-wrap">
	    
	    <div id="elastix-callcenter-controles">
	        <button id="btn_hangup" class="elastix-callcenter-boton-activo"><?php echo $_smarty_tpl->tpl_vars['BTN_COLGAR_LLAMADA']->value;?>
</button>
	        <button id="btn_togglebreak" class="<?php echo $_smarty_tpl->tpl_vars['CLASS_BOTON_BREAK']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['BTN_BREAK']->value;?>
</button>
	        <button id="btn_transfer" class="elastix-callcenter-boton-activo" ><?php echo $_smarty_tpl->tpl_vars['BTN_TRANSFER']->value;?>
</button>
            <button id="btn_agendar_llamada" <?php if ($_smarty_tpl->tpl_vars['CALLINFO_CALLTYPE']->value!='outgoing') {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->tpl_vars['BTN_AGENDAR_LLAMADA']->value;?>
</button>
	        <button id="btn_guardar_formularios"><?php echo $_smarty_tpl->tpl_vars['BTN_GUARDAR_FORMULARIOS']->value;?>
</button>
<?php if ($_smarty_tpl->tpl_vars['BTN_VTIGERCRM']->value) {?>
	        <button id="btn_vtigercrm" class="elastix-callcenter-boton-activo"><?php echo $_smarty_tpl->tpl_vars['BTN_VTIGERCRM']->value;?>
</button>
<?php }?>
	        <button id="btn_logout" class="elastix-callcenter-boton-activo"><?php echo $_smarty_tpl->tpl_vars['BTN_FINALIZAR_LOGIN']->value;?>
</button>
	    </div> 
	    
	    <div id="elastix-callcenter-contenido">
			
			<div id="elastix-callcenter-cejillas-contenido">
			   <ul>
                   <li><a href="#elastix-callcenter-llamada-paneles"><?php echo $_smarty_tpl->tpl_vars['TAB_LLAMADA']->value;?>
</a></li>
                   <?php  $_smarty_tpl->tpl_vars['HTML_PANEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HTML_PANEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_PANELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HTML_PANEL']->key => $_smarty_tpl->tpl_vars['HTML_PANEL']->value) {
$_smarty_tpl->tpl_vars['HTML_PANEL']->_loop = true;
?>
                   <li><a href="#tabs-<?php echo $_smarty_tpl->tpl_vars['HTML_PANEL']->value['panelname'];?>
"><?php echo $_smarty_tpl->tpl_vars['HTML_PANEL']->value['title'];?>
</a></li>
                   <?php } ?>
			   </ul>
                <div id="elastix-callcenter-llamada-paneles">
                    <div id="elastix-callcenter-llamada-paneles-izq" class="ui-layout-west">
                        <div class="ui-layout-center"><fieldset class="ui-widget-content ui-corner-all"><legend><b><?php echo $_smarty_tpl->tpl_vars['TAB_LLAMADA_INFO']->value;?>
</b></legend><div id="elastix-callcenter-llamada-info"><?php echo $_smarty_tpl->tpl_vars['CONTENIDO_LLAMADA_INFORMACION']->value;?>
</div></fieldset></div>
                        <div class="ui-layout-south"><fieldset class="ui-widget-content ui-corner-all"><legend><b><?php echo $_smarty_tpl->tpl_vars['TAB_LLAMADA_SCRIPT']->value;?>
</b></legend><div id="elastix-callcenter-llamada-script"><?php echo $_smarty_tpl->tpl_vars['CONTENIDO_LLAMADA_SCRIPT']->value;?>
</div></fieldset></div>
                    </div>
                    <div class="ui-layout-center"><fieldset class="ui-widget-content ui-corner-all"><legend><b><?php echo $_smarty_tpl->tpl_vars['TAB_LLAMADA_FORM']->value;?>
</b></legend><div id="elastix-callcenter-llamada-form"><?php echo $_smarty_tpl->tpl_vars['CONTENIDO_LLAMADA_FORMULARIO']->value;?>
</div></fieldset></div>
                </div>
                <?php  $_smarty_tpl->tpl_vars['HTML_PANEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['HTML_PANEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_PANELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['HTML_PANEL']->key => $_smarty_tpl->tpl_vars['HTML_PANEL']->value) {
$_smarty_tpl->tpl_vars['HTML_PANEL']->_loop = true;
?>
                <div id="tabs-<?php echo $_smarty_tpl->tpl_vars['HTML_PANEL']->value['panelname'];?>
">
                    <?php echo $_smarty_tpl->tpl_vars['HTML_PANEL']->value['content'];?>

                </div>
                <?php } ?>
			</div>
		</div>
	</div>
</div>
<div id="elastix-callcenter-seleccion-break" title="<?php echo $_smarty_tpl->tpl_vars['TITLE_BREAK_DIALOG']->value;?>
">
    <form>
        <select
            name="break_select"
            id="break_select"
            class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"
            style="width: 100%"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['LISTA_BREAKS']->value),$_smarty_tpl);?>

        </select>
    </form>
</div>
<div id="elastix-callcenter-seleccion-transfer" title="<?php echo $_smarty_tpl->tpl_vars['TITLE_TRANSFER_DIALOG']->value;?>
">
    <form>
        <table border="0" cellpadding="0" style="width: 100%;">
            <tr>
                <td><input
                name="transfer_extension"
                id="transfer_extension"
                class="ui-widget-content ui-corner-all"
                style="width: 100%" /></td>
            </tr>
            <tr>
                <td>
                    <div align="center" id="transfer_type_radio">
                        <input type="radio" id="transfer_type_blind" name="transfer_type" value="blind" checked="checked"/><label for="transfer_type_blind"><?php echo $_smarty_tpl->tpl_vars['LBL_TRANSFER_BLIND']->value;?>
</label>
                        <input type="radio" id="transfer_type_attended" name="transfer_type" value="attended" /><label for="transfer_type_attended"><?php echo $_smarty_tpl->tpl_vars['LBL_TRANSFER_ATTENDED']->value;?>
</label>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</div>
<div id="elastix-callcenter-agendar-llamada" title="<?php echo $_smarty_tpl->tpl_vars['TITLE_SCHEDULE_CALL']->value;?>
">
	<div
	    id="elastix-callcenter-agendar-llamada-error-message"
	    class="ui-state-error ui-corner-all">
	    <p>
	        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
	        <span id="elastix-callcenter-agendar-llamada-error-message-text"></span>
	    </p>
	</div>
    <form>
        <table border="0" cellpadding="0" style="width: 100%;">
            <tr>
                <td><label style="display: table-cell;" for="schedule_new_phone"><b><?php echo $_smarty_tpl->tpl_vars['LBL_CONTACTO_TELEFONO']->value;?>
:&nbsp;</b></label></td>
                <td><input
                    name="schedule_new_phone"
                    id="schedule_new_phone"
                    class="ui-widget-content ui-corner-all"
                    maxlength="64"
                    style="display: table-cell; width: 100%;"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CONTACTO_TELEFONO']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
            </tr>
            <tr>
                <td><label style="display: table-cell;" for="schedule_new_name"><b><?php echo $_smarty_tpl->tpl_vars['LBL_CONTACTO_NOMBRES']->value;?>
:&nbsp;</b></label></td>
                <td><input
                    name="schedule_new_name"
                    id="schedule_new_name"
                    class="ui-widget-content ui-corner-all"
                    maxlength="250"
                    style="display: table-cell; width: 100%;"
                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['TEXTO_CONTACTO_NOMBRES']->value, ENT_QUOTES, 'UTF-8', true);?>
" /></td>
            </tr>
        </table>
        <hr />
        <div align="center" id="schedule_radio" style="width: 100%">
            <input type="radio" id="schedule_type_campaign_end" name="schedule_type" value="campaign_end" checked="checked"/><label for="schedule_type_campaign_end"><?php echo $_smarty_tpl->tpl_vars['LBL_SCHEDULE_CAMPAIGN_END']->value;?>
</label>
            <input type="radio" id="schedule_type_bydate" name="schedule_type" value="bydate" /><label for="schedule_type_bydate"><?php echo $_smarty_tpl->tpl_vars['LBL_SCHEDULE_BYDATE']->value;?>
</label>
        </div>
        <br/>
        <table id="schedule_date" border="0" cellpadding="0" style="width: 100%;">
            <tr>
                <td><label for="schedule_date_start"><b><?php echo $_smarty_tpl->tpl_vars['LBL_SCHEDULE_DATE_START']->value;?>
:&nbsp;</b></label></td>
                <td><input type="text" class="ui-widget-content ui-corner-all" name="schedule_date_start" id="schedule_date_start" /></td>
                <td><label for="schedule_date_end"><b><?php echo $_smarty_tpl->tpl_vars['LBL_SCHEDULE_DATE_END']->value;?>
:&nbsp;</b></label></td>
                <td><input type="text" class="ui-widget-content ui-corner-all" name="schedule_date_end" id="schedule_date_end" /></td>
            </tr>
            <tr>
                <td><label><b><?php echo $_smarty_tpl->tpl_vars['LBL_SCHEDULE_TIME_START']->value;?>
:&nbsp;</b></label></td>
                <td><select
                        name="schedule_time_start_hh"
                        id="schedule_time_start_hh"
                        class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['SCHEDULE_TIME_HH']->value),$_smarty_tpl);?>

                    </select>:<select
                        name="schedule_time_start_mm"
                        id="schedule_time_start_mm"
                        class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['SCHEDULE_TIME_MM']->value),$_smarty_tpl);?>

                    </select></td>
                <td><label><b><?php echo $_smarty_tpl->tpl_vars['LBL_SCHEDULE_TIME_END']->value;?>
:&nbsp;</b></label></td>
                <td><select
                        name="schedule_time_end_hh"
                        id="schedule_time_end_hh"
                        class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['SCHEDULE_TIME_HH']->value),$_smarty_tpl);?>

                    </select>:<select
                        name="schedule_time_end_mm"
                        id="schedule_time_end_mm"
                        class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['SCHEDULE_TIME_MM']->value),$_smarty_tpl);?>

                    </select></td>
            </tr>
            <tr>
                <td colspan="4"><input type="checkbox" id="schedule_same_agent" name="schedule_same_agent" /><label for="schedule_same_agent"><?php echo $_smarty_tpl->tpl_vars['LBL_SCHEDULE_SAME_AGENT']->value;?>
</label></td>
            </tr>
        </table>
    </form>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
// Aplicar temas de jQueryUI a diversos elementos
$(document).ready(function() {

    apply_ui_styles(<?php echo $_smarty_tpl->tpl_vars['APPLY_UI_STYLES']->value;?>
);
    initialize_client_state(<?php echo $_smarty_tpl->tpl_vars['INITIAL_CLIENT_STATE']->value;?>
);

});
<?php echo '</script'; ?>
>

<?php }} ?>
