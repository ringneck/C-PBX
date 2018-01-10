<?php /* Smarty version Smarty-3.1.21, created on 2017-12-01 20:41:34
         compiled from "/var/www/html/modules/form_list/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1407754075a213fee627261-68884771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1ffbc59d565d7925183e0bc9db1a0fa4eb555a' => 
    array (
      0 => '/var/www/html/modules/form_list/themes/default/filter.tpl',
      1 => 1498022415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1407754075a213fee627261-68884771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cbo_estado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213fee676122_27152617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213fee676122_27152617')) {function content_5a213fee676122_27152617($_smarty_tpl) {?><table class='tabForm' width="100%" border="0">
    <tr>
        <td class="letra12" width="10%"><?php echo $_smarty_tpl->tpl_vars['cbo_estado']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['cbo_estado']->value['INPUT'];?>
</td>
    </tr>
</table><?php }} ?>
