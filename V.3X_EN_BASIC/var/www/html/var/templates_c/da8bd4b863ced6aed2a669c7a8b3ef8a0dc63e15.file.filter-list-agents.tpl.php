<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 12:58:55
         compiled from "/var/www/html/modules/cb_extensions/themes/default/filter-list-agents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:266313118586dc47f90c5c1-94370890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da8bd4b863ced6aed2a669c7a8b3ef8a0dc63e15' => 
    array (
      0 => '/var/www/html/modules/cb_extensions/themes/default/filter-list-agents.tpl',
      1 => 1411596016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '266313118586dc47f90c5c1-94370890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LABEL_STATE' => 0,
    'estados' => 0,
    'estado_sel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586dc47f9345d8_11980469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586dc47f9345d8_11980469')) {function content_586dc47f9345d8_11980469($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
?><table width="100%" border="0">
<tr>
	<td class="letra12" width="10%" align="right"><b><?php echo $_smarty_tpl->tpl_vars['LABEL_STATE']->value;?>
:</b></td>
    <td><?php echo smarty_function_html_options(array('name'=>'cbo_estado','id'=>'cbo_estado','options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado_sel']->value,'onchange'=>'submit();'),$_smarty_tpl);?>
</td>
</tr>
</table>
<?php }} ?>
