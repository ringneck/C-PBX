<?php /* Smarty version Smarty-3.1.21, created on 2017-03-18 17:54:47
         compiled from "/var/www/html/modules/campaign_in/themes/default/filter-list-campaign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107691618358ccf5d73a2b64-96299343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0205110ac04567e299b49bdef2967f6205674e21' => 
    array (
      0 => '/var/www/html/modules/campaign_in/themes/default/filter-list-campaign.tpl',
      1 => 1412191852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107691618358ccf5d73a2b64-96299343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LABEL_CAMPAIGN_STATE' => 0,
    'estados' => 0,
    'estado_sel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58ccf5d73db405_23476539',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58ccf5d73db405_23476539')) {function content_58ccf5d73db405_23476539($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
?><table width="100%" border="0">
<tr>
    <td align="right" class="letra12" width="20%" ><b><?php echo $_smarty_tpl->tpl_vars['LABEL_CAMPAIGN_STATE']->value;?>
:</b></td>
    <td><?php echo smarty_function_html_options(array('name'=>'cbo_estado','id'=>'cbo_estado','options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado_sel']->value,'onchange'=>'submit();'),$_smarty_tpl);?>
</td>
</tr>
</table>

<?php }} ?>
