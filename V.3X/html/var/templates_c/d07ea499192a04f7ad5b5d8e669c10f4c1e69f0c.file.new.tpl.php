<?php /* Smarty version Smarty-3.1.21, created on 2017-12-01 21:45:10
         compiled from "/var/www/html/modules/campaign_out/themes/default/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4846346115a21443b5a4eb7-12246256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd07ea499192a04f7ad5b5d8e669c10f4c1e69f0c' => 
    array (
      0 => '/var/www/html/modules/campaign_out/themes/default/new.tpl',
      1 => 1512132310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4846346115a21443b5a4eb7-12246256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a21443b714ba8_62576997',
  'variables' => 
  array (
    'no_queues' => 0,
    'no_outgoing_queues' => 0,
    'no_forms' => 0,
    'relative_dir_rich_text' => 0,
    'FRAMEWORK_TIENE_TITULO_MODULO' => 0,
    'icon' => 0,
    'title' => 0,
    'mode' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'REQUIRED_FIELD' => 0,
    'APPLY_CHANGES' => 0,
    'nombre' => 0,
    'fecha_str' => 0,
    'fecha_ini' => 0,
    'fecha_fin' => 0,
    'hora_str' => 0,
    'hora_ini_HH' => 0,
    'hora_ini_MM' => 0,
    'hora_fin_HH' => 0,
    'hora_fin_MM' => 0,
    'formulario' => 0,
    'label_manage_forms' => 0,
    'formularios_elegidos' => 0,
    'external_url' => 0,
    'label_manage_external_url' => 0,
    'trunk' => 0,
    'label_manage_trunks' => 0,
    'max_canales' => 0,
    'LABEL_CHANNEL_ZERO_DISABLE' => 0,
    'context' => 0,
    'queue' => 0,
    'label_manage_queues' => 0,
    'reintentos' => 0,
    'script' => 0,
    'rte_script' => 0,
    'id_campaign' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21443b714ba8_62576997')) {function content_5a21443b714ba8_62576997($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['no_queues']->value) {?>
<p><b>현재 사용가능한 대기열이 없습니다</b></p>
<p>아웃바운드 캠페인을 생성하기 위해서 새로운 대기열을 생성하세요.<a href="?menu=pbxconfig&amp;display=queues">대기열 생성 바로가기</a>.</p>
<?php } elseif ($_smarty_tpl->tpl_vars['no_outgoing_queues']->value) {?>
<p><b>현재 아웃바운드 캠페인 생성을 위한 대기열이 없습니다</b></p>
<p>모든 대기열이 인바운드 캠페인에 포함되었습니다. 아웃바운드 캠페인을 생성하기 위해서 새로운 대기열을 생성하세요.<a href="?menu=pbxconfig&amp;display=queues">대기열 생성 바로가기</a>.</p>
<?php } elseif ($_smarty_tpl->tpl_vars['no_forms']->value) {?>
<p><b>활성화된 템플릿이 없습니다</b></p>
<p>아웃바운드 캠페인을 생성하기 위해서 새로운 템플릿을 생성하세요.<a href="?menu=form_designer">템플릿 생성 바로가기</a>.</p>
<?php } else { ?>
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relative_dir_rich_text']->value;?>
/richtext/html2xhtml.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['relative_dir_rich_text']->value;?>
/richtext/richtext_compressed.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
//Usage: initRTE(imagesPath, includesPath, cssFile, genXHTML, encHTML)
initRTE("./<?php echo $_smarty_tpl->tpl_vars['relative_dir_rich_text']->value;?>
/richtext/images/", "./<?php echo $_smarty_tpl->tpl_vars['relative_dir_rich_text']->value;?>
/richtext/", "", true);
var rte_script = new richTextEditor('rte_script');
<?php echo '</script'; ?>
>

<form method="post" enctype="multipart/form-data">
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
          <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
        <td align="left">
          <input class="button" type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" onclick="return enviar_datos();" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
" />
        </td>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
          <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
        <td align="left">
          <input class="button" type="submit" name="apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['APPLY_CHANGES']->value;?>
" onclick="return enviar_datos();" />
          <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
" />
        </td>
          <?php } else { ?>

          <?php }?>
     </tr>
   </table>
  </td>
</tr>
<tr>
  <td>
    <table width="900" valign="top" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr height='50'>
          <td width="20%" align='right'><?php echo $_smarty_tpl->tpl_vars['nombre']->value['LABEL'];?>
: <span  class="required">*</span></td>
          <td colspan='2'><?php echo $_smarty_tpl->tpl_vars['nombre']->value['INPUT'];?>
</td>
      </tr>
      <tr>
          <td align='right'><?php echo $_smarty_tpl->tpl_vars['fecha_str']->value['LABEL'];?>
: <span  class="required">*</span></td>
          <td width="25%"><?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value['LABEL'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value['LABEL'];?>
</td>
      </tr>
      <tr height='10'>
          <td align='right' colspan='3'></td>
      </tr>
      <tr height='30'>
          <td align='right'><?php echo $_smarty_tpl->tpl_vars['hora_str']->value['LABEL'];?>
: <span  class="required">*</span></td>
          <td align='left' colspan='2'><?php echo $_smarty_tpl->tpl_vars['hora_ini_HH']->value['INPUT'];?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['hora_ini_MM']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['hora_ini_HH']->value['LABEL'];?>
</td>
      </tr>
      <tr height='30'>
          <td>&nbsp;</td>
          <td align='left' colspan='2'><?php echo $_smarty_tpl->tpl_vars['hora_fin_HH']->value['INPUT'];?>
&nbsp;:&nbsp;<?php echo $_smarty_tpl->tpl_vars['hora_fin_MM']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['hora_fin_HH']->value['LABEL'];?>
</td>
      </tr>
      <tr height='10'>
          <td align='left' colspan='3'></td>
      </tr>
      <tr>
		<td align='right' valign='top'>
			<?php echo $_smarty_tpl->tpl_vars['formulario']->value['LABEL'];?>
: <span  class="required">*</span>
			<br><br>
			<a href="?menu=form_designer">
			<b><?php echo $_smarty_tpl->tpl_vars['label_manage_forms']->value;?>
</b>
			</a><br><br><hr>
		</td>
          <td  colspan='2'>
           <?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit'||$_smarty_tpl->tpl_vars['mode']->value=='input') {?>
                <table border='0' cellpadding='0' cellspacing='0'>
                    <tr>
                        <td rowspan='2'><?php echo $_smarty_tpl->tpl_vars['formulario']->value['INPUT'];?>
</td>
                        <td><input type='button' name='agregar_formulario' value="&gt;&gt;" onclick='add_form()'/></td>
                        <td width="50%" rowspan='2' ><?php echo $_smarty_tpl->tpl_vars['formularios_elegidos']->value['INPUT'];?>
</td>
                        <?php if ($_smarty_tpl->tpl_vars['label_manage_forms']->value) {?>
                        <td rowspan='2' align='right' valign='top'></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <td><input type='button' name='quitar_formulario' value="&lt;&lt;" onclick='drop_form()'/></td>
                    </tr>
                </table>
           <?php } else { ?>
               <?php echo $_smarty_tpl->tpl_vars['formulario']->value['INPUT'];?>

            <?php }?>
            </td>
	  </tr>
      <tr  height='30'>
		<td align='right'><?php echo $_smarty_tpl->tpl_vars['external_url']->value['LABEL'];?>
:<br><br>
		<a href="?menu=external_url">
		<b><?php echo $_smarty_tpl->tpl_vars['label_manage_external_url']->value;?>
</b></a><br><hr>
		</td>
		<td valign="top" colspan='2'><?php echo $_smarty_tpl->tpl_vars['external_url']->value['INPUT'];
if ($_smarty_tpl->tpl_vars['label_manage_external_url']->value) {?>&nbsp;<?php }?></td>
      </tr>
      <tr  height='30'>
        <td align='right'><?php echo $_smarty_tpl->tpl_vars['trunk']->value['LABEL'];?>
: <span  class="required">*</span><br><br>
        <a href="?menu=pbxconfig&amp;display=trunks">
        <b><?php echo $_smarty_tpl->tpl_vars['label_manage_trunks']->value;?>
</b></a><br><hr>
        </td>
        <td valign="top" colspan='2'><?php echo $_smarty_tpl->tpl_vars['trunk']->value['INPUT'];
if ($_smarty_tpl->tpl_vars['label_manage_trunks']->value) {?>&nbsp;<?php }?></td>
      </tr>
      <tr  height='30'>
		<td align='right'><?php echo $_smarty_tpl->tpl_vars['max_canales']->value['LABEL'];?>
: <span  class="required">*</span></td>
		<td colspan='2'><?php echo $_smarty_tpl->tpl_vars['max_canales']->value['INPUT'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['LABEL_CHANNEL_ZERO_DISABLE']->value;?>
</td>
      </tr>
      <tr height='30'>
		<td align='right'><?php echo $_smarty_tpl->tpl_vars['context']->value['LABEL'];?>
: <span  class="required">*</span></td>
		<td colspan='2'><?php echo $_smarty_tpl->tpl_vars['context']->value['INPUT'];?>
</td>
      </tr>
      <tr height='30'>
		<td align='right'><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
: <span  class="required">*</span><br><br>
		<a href="?menu=pbxconfig&amp;display=queues">
		<b><?php echo $_smarty_tpl->tpl_vars['label_manage_queues']->value;?>
</b></a><br><hr>
		</td>
		<td valign="top" colspan='2'><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];
if ($_smarty_tpl->tpl_vars['label_manage_queues']->value) {?>&nbsp;<?php }?></td>
      </tr>
      <tr height='30'>
	    <td align='right'><?php echo $_smarty_tpl->tpl_vars['reintentos']->value['LABEL'];?>
: <span  class="required">*</span></td>
	    <td  colspan='4'><?php echo $_smarty_tpl->tpl_vars['reintentos']->value['INPUT'];?>
</td>
      </tr>
      <tr>
        <td align='right' valign='top'><?php echo $_smarty_tpl->tpl_vars['script']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td  colspan='2'>
            <?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit'||$_smarty_tpl->tpl_vars['mode']->value=='input') {?>
               <?php echo '<script'; ?>
 language="JavaScript" type="text/javascript">
                   rte_script.html ="<?php echo $_smarty_tpl->tpl_vars['rte_script']->value;?>
";
                   rte_script.toggleSrc = false;
                   rte_script.build();
               <?php echo '</script'; ?>
>
            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['script']->value['INPUT'];?>

            <?php }?>
        </td>
      </tr>
      </table>
    </td>
  </tr>
</table>
<input type="hidden" name="id_campaign" id='id_campaign' value="<?php echo $_smarty_tpl->tpl_vars['id_campaign']->value;?>
" />
<input type="hidden" name="values_form" id='values_form' value="" />
</form>


<?php echo '<script'; ?>
 type="text/javascript">
/* Función para recoger todas las variables del formulario y procesarlas. Sólo
   se requiere atención especial para el RTF del script, y para la lista de
   formularios elegidos. */
function enviar_datos()
{
	var lc = listaControlesFormularios();
	var select_form = lc[1]; /* Formularios elegidos */
    var values = "";

    for(var i=0; i < select_form.length; i++) {
        values = values + select_form[i].value + ",";
    }
    if(values != "")
        values = values.substring(0,values.length-1);
    document.getElementById("values_form").value = values;

    updateRTEs();
    return true;
}

function add_form()
{
	var lc = listaControlesFormularios();
	var select_formularios = lc[0];
	var select_formularios_elegidos = lc[1];

    for(var i=0;i<select_formularios.length;i++){
        if(select_formularios[i].selected){
            var option_tmp = document.createElement("option");
            option_tmp.value = select_formularios[i].value;
            option_tmp.appendChild(document.createTextNode(select_formularios[i].firstChild.data));
            select_formularios_elegidos.appendChild(option_tmp);
        }
    }

    for(var i=select_formularios.length-1;i>=0;i--){
        if(select_formularios[i].selected){
            select_formularios.removeChild(select_formularios[i]);
        }
    }
}


function drop_form()
{
	var lc = listaControlesFormularios();
	var select_formularios = lc[0];
	var select_formularios_elegidos = lc[1];

    for(var i=0;i<select_formularios_elegidos.length;i++){
        if(select_formularios_elegidos[i].selected){
            var option_tmp = document.createElement("option");
            option_tmp.value = select_formularios_elegidos[i].value;
            option_tmp.appendChild(document.createTextNode(select_formularios_elegidos[i].firstChild.data));
            select_formularios.appendChild(option_tmp);
        }
    }

    for(var i=select_formularios_elegidos.length-1;i>=0;i--){
        if(select_formularios_elegidos[i].selected){
            select_formularios_elegidos.removeChild(select_formularios_elegidos[i]);
        }
    }
}

/* Esta función es necesaria para lidiar con el cambio en los nombres de los
   controles generados por Elastix entre 1.6-12 y 1.6.2-1 */
function listaControlesFormularios()
{
	var listaControles;
	var select_formularios;
	var select_formularios_elegidos;

	listaControles = document.getElementsByName('formulario');
	if (listaControles.length == 0)
		listaControles = document.getElementsByName('formulario[]');
    select_formularios = listaControles[0];

	listaControles = document.getElementsByName('formularios_elegidos');
	if (listaControles.length == 0)
		listaControles = document.getElementsByName('formularios_elegidos[]');
    select_formularios_elegidos = listaControles[0];

	var lista = new Array();
	lista[0] = select_formularios;
	lista[1] = select_formularios_elegidos;
	return lista;
}
<?php echo '</script'; ?>
>

<?php }?> 
<?php }} ?>
