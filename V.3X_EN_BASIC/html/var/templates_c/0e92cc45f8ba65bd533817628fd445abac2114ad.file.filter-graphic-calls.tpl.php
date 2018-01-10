<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 01:24:00
         compiled from "/var/www/html/modules/graphic_calls/themes/default/filter-graphic-calls.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1184862767586d21a06d2a50-34928789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e92cc45f8ba65bd533817628fd445abac2114ad' => 
    array (
      0 => '/var/www/html/modules/graphic_calls/themes/default/filter-graphic-calls.tpl',
      1 => 1293664192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1184862767586d21a06d2a50-34928789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fecha_ini' => 0,
    'fecha_fin' => 0,
    'LABEL_FIND' => 0,
    'tipo' => 0,
    'estado' => 0,
    'queue' => 0,
    'MODULE_NAME' => 0,
    'TIPO' => 0,
    'ESTADO' => 0,
    'QUEUE' => 0,
    'FECHA_INI' => 0,
    'FECHA_FIN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d21a07102d4_81350972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d21a07102d4_81350972')) {function content_586d21a07102d4_81350972($_smarty_tpl) {?>    <table width='100%' border='0'>
        <tr>
            <td align='left'>
                <table>
                <tr>
                    <td class='letra12'><?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value['LABEL'];?>
<span  class='required'>*</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fecha_ini']->value['INPUT'];?>
</td>
                    <td class='letra12'><?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value['LABEL'];?>
<span  class='required'>*</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['fecha_fin']->value['INPUT'];?>
</td>
                    <td class='letra12' colspan="2">&nbsp;</td>
                    <td><input type='submit' name='submit_fecha' value='<?php echo $_smarty_tpl->tpl_vars['LABEL_FIND']->value;?>
' class='button' /></td>
                </tr>
                <tr>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['tipo']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['tipo']->value['INPUT'];?>
</td>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['estado']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['estado']->value['INPUT'];?>
</td>
                    <td class='letra12' align='left'><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
                    <td class='letra12'>&nbsp;</td>
                </tr>
                </table>
            </td>
        </tr>
        <tr align='left'>
            <td>
                <img src='?menu=<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
&amp;rawmode=yes&amp;action=graph_histogram&amp;tipo=<?php echo $_smarty_tpl->tpl_vars['TIPO']->value;?>
&amp;estado=<?php echo $_smarty_tpl->tpl_vars['ESTADO']->value;?>
&amp;queue=<?php echo $_smarty_tpl->tpl_vars['QUEUE']->value;?>
&amp;fecha_ini=<?php echo $_smarty_tpl->tpl_vars['FECHA_INI']->value;?>
&amp;fecha_fin=<?php echo $_smarty_tpl->tpl_vars['FECHA_FIN']->value;?>
' />
            </td>
        </tr>
    </table>

<?php }} ?>
