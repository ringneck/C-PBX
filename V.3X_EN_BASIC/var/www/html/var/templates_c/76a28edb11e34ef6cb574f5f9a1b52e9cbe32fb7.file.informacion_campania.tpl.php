<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 00:50:56
         compiled from "/var/www/html/modules/campaign_monitoring/themes/default/informacion_campania.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270442024586d19e0adec28-65424826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76a28edb11e34ef6cb574f5f9a1b52e9cbe32fb7' => 
    array (
      0 => '/var/www/html/modules/campaign_monitoring/themes/default/informacion_campania.tpl',
      1 => 1383063631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270442024586d19e0adec28-65424826',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ETIQUETA_CAMPANIA' => 0,
    'ETIQUETA_FECHA_INICIO' => 0,
    'ETIQUETA_FECHA_FINAL' => 0,
    'ETIQUETA_HORARIO' => 0,
    'ETIQUETA_COLA' => 0,
    'ETIQUETA_INTENTOS' => 0,
    'ETIQUETA_TOTAL_LLAMADAS' => 0,
    'ETIQUETA_LLAMADAS_COLA' => 0,
    'ETIQUETA_LLAMADAS_EXITO' => 0,
    'ETIQUETA_LLAMADAS_PENDIENTES' => 0,
    'ETIQUETA_LLAMADAS_MARCANDO' => 0,
    'ETIQUETA_LLAMADAS_TIMBRANDO' => 0,
    'ETIQUETA_LLAMADAS_FALLIDAS' => 0,
    'ETIQUETA_LLAMADAS_NOCONTESTA' => 0,
    'ETIQUETA_LLAMADAS_ABANDONADAS' => 0,
    'ETIQUETA_LLAMADAS_CORTAS' => 0,
    'ETIQUETA_LLAMADAS_SINRASTRO' => 0,
    'ETIQUETA_LLAMADAS_TERMINADAS' => 0,
    'ETIQUETA_PROMEDIO_DURAC_LLAM' => 0,
    'ETIQUETA_MAX_DURAC_LLAM' => 0,
    'ETIQUETA_ESTADO' => 0,
    'ETIQUETA_NUMERO_TELEFONO' => 0,
    'ETIQUETA_TRONCAL' => 0,
    'ETIQUETA_DESDE' => 0,
    'ETIQUETA_AGENTES' => 0,
    'ETIQUETA_AGENTE' => 0,
    'ETIQUETA_REGISTRO' => 0,
    'PREVIOUS_N' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d19e0b546a2_72903392',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d19e0b546a2_72903392')) {function content_586d19e0b546a2_72903392($_smarty_tpl) {?>
<div
    id="elastix-callcenter-error-message"
    class="ui-state-error ui-corner-all">
    <p>
        <span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span>
        <span id="elastix-callcenter-error-message-text"></span>
    </p>
</div>
<div id="campaignMonitoringApplication">
<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="campaign">

<b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_CAMPANIA']->value;?>
:</b>

{{view Ember.Select
            contentBinding="content"
            optionValuePath="content.key_campaign"
            optionLabelPath="content.desc_campaign"
            valueBinding="key_campaign" }}


{{outlet}}

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="campaign/details">

<table width="100%" >
    <tr>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_FECHA_INICIO']->value;?>
:</b></td>
        <td>{{fechaInicio}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_FECHA_FINAL']->value;?>
:</b></td>
        <td>{{fechaFinal}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_HORARIO']->value;?>
:</b></td>
        <td>{{horaInicio}} - {{horaFinal}}</td>
    </tr>
    <tr>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_COLA']->value;?>
:</b></td>
        <td>{{cola}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_INTENTOS']->value;?>
:</b></td>
        <td>{{maxIntentos}}</td>
        <td></td>
        <td>&nbsp;</td>
    </tr>
</table>


<table width="100%" >
    <tr>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_TOTAL_LLAMADAS']->value;?>
:</b></td>
        <td>{{llamadas.total}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_COLA']->value;?>
:</b></td>
        <td>{{llamadas.encola}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_EXITO']->value;?>
:</b></td>
        <td>{{llamadas.conectadas}}</td>
    </tr>
    {{#if outgoing }}
    <tr>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_PENDIENTES']->value;?>
:</b></td>
        <td>{{llamadas.pendientes}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_MARCANDO']->value;?>
:</b></td>
        <td>{{llamadas.marcando}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_TIMBRANDO']->value;?>
:</b></td>
        <td>{{llamadas.timbrando}}</td>
    </tr>
    <tr>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_FALLIDAS']->value;?>
:</b></td>
        <td>{{llamadas.fallidas}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_NOCONTESTA']->value;?>
:</b></td>
        <td>{{llamadas.nocontesta}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_ABANDONADAS']->value;?>
:</b></td>
        <td>{{llamadas.abandonadas}}</td>
    </tr>
    <tr>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_CORTAS']->value;?>
:</b></td>
        <td>{{llamadas.cortas}}</td>
        <td colspan="4">&nbsp;</td>
    </tr>
    {{else}}
    <tr>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_SINRASTRO']->value;?>
:</b></td>
        <td>{{llamadas.sinrastro}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_ABANDONADAS']->value;?>
:</b></td>
        <td>{{llamadas.abandonadas}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_TERMINADAS']->value;?>
:</b></td>
        <td>{{llamadas.terminadas}}</td>
    </tr>
    {{/if}}
    <tr>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_PROMEDIO_DURAC_LLAM']->value;?>
:</b></td>
        <td>{{llamadas.fmtpromedio}}</td>
        <td><b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_MAX_DURAC_LLAM']->value;?>
:</b></td>
        <td>{{llamadas.fmtmaxduration}}</td>
    </tr>
</table>


<table width="100%" ><tr>
    <td width="50%" style="vertical-align: top;">
        <b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_LLAMADAS_MARCANDO']->value;?>
:</b>
        <table class="titulo">
            <tr>
                <td width="20%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_ESTADO']->value;?>
</td>
                <td width="30%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_NUMERO_TELEFONO']->value;?>
</td>
                <td width="30%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_TRONCAL']->value;?>
</td>
                <td width="20%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_DESDE']->value;?>
</td>
            </tr>
        </table>
        <div class="llamadas" {{bindAttr style="alturaLlamada"}}>
            <table>
                {{#view tagName="tbody"}}
                {{#each llamadasMarcando}}
                <tr {{bindAttr class="reciente"}}>
                    <td width="20%" nowrap="nowrap">{{estado}}</td>
                    <td width="30%" nowrap="nowrap">{{numero}}</td>
                    <td width="30%" nowrap="nowrap">{{troncal}}</td>
                    <td width="20%" nowrap="nowrap">{{desde}}</td>
                </tr>
                {{/each}}
                {{/view}}
            </table>
        </div>
    </td>
    <td width="50%" style="vertical-align: top;">
        <b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_AGENTES']->value;?>
:</b>
        <table class="titulo">
            <tr>
                <td width="20%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_AGENTE']->value;?>
</td>
                <td width="14%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_ESTADO']->value;?>
</td>
                <td width="23%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_NUMERO_TELEFONO']->value;?>
</td>
                <td width="23%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_TRONCAL']->value;?>
</td>
                <td width="20%" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_DESDE']->value;?>
</td>
            </tr>
        </table>
        <div class="llamadas" {{bindAttr style="alturaLlamada"}}>
            <table>
                {{#view tagName="tbody"}}
                {{#each agentes}}
                <tr {{bindAttr class="reciente"}}>
                    <td width="20%" nowrap="nowrap">{{canal}}</td>
                    <td width="14%" nowrap="nowrap">{{estado}}</td>
                    <td width="23%" nowrap="nowrap">{{numero}}</td>
                    <td width="23%" nowrap="nowrap">{{troncal}}</td>
                    <td width="20%" nowrap="nowrap">{{desde}}</td>
                </tr>
                {{/each}}
                {{/view}}
            </table>
        </div>
    </td>
</tr></table>


{{view Ember.Checkbox checkedBinding="registroVisible"}}
<b><?php echo $_smarty_tpl->tpl_vars['ETIQUETA_REGISTRO']->value;?>
: </b><br/>
{{#if registroVisible}}
<button class="button" {{action "cargarprevios" }}><?php echo $_smarty_tpl->tpl_vars['PREVIOUS_N']->value;?>
</button>
{{#view App.RegistroView class="registro" }}
<table>
    {{#each registro}}
    <tr>
        <td>{{timestamp}}</td>
        <td>{{mensaje}}</td>
    </tr>
    {{/each}}
</table>
{{/view}}
{{/if}}
<?php echo '</script'; ?>
>
</div>
<?php }} ?>
