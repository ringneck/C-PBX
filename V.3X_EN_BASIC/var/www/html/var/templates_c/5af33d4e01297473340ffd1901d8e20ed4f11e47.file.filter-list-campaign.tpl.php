<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 00:16:53
         compiled from "/var/www/html/modules/campaign_out/themes/default/filter-list-campaign.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90760999586d11e5456a29-86074416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5af33d4e01297473340ffd1901d8e20ed4f11e47' => 
    array (
      0 => '/var/www/html/modules/campaign_out/themes/default/filter-list-campaign.tpl',
      1 => 1412191933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90760999586d11e5456a29-86074416',
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
  'unifunc' => 'content_586d11e5480e79_88397210',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d11e5480e79_88397210')) {function content_586d11e5480e79_88397210($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
?><table width="100%" border="0">
<tr>
    <td align="right" class="letra12" width="20%" ><b><?php echo $_smarty_tpl->tpl_vars['LABEL_CAMPAIGN_STATE']->value;?>
:</b></td>
    <td><?php echo smarty_function_html_options(array('name'=>'cbo_estado','id'=>'cbo_estado','options'=>$_smarty_tpl->tpl_vars['estados']->value,'selected'=>$_smarty_tpl->tpl_vars['estado_sel']->value,'onchange'=>'submit();'),$_smarty_tpl);?>
</td>
</tr>
</table>

<?php }} ?>
