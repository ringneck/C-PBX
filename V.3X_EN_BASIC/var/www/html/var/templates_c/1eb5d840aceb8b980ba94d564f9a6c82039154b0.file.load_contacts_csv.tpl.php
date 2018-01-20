<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 00:27:45
         compiled from "/var/www/html/modules/campaign_out/uploaders/CSV/tpl/load_contacts_csv.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1909582542586d14714fac76-78154720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1eb5d840aceb8b980ba94d564f9a6c82039154b0' => 
    array (
      0 => '/var/www/html/modules/campaign_out/uploaders/CSV/tpl/load_contacts_csv.tpl',
      1 => 1459734041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1909582542586d14714fac76-78154720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'encoding' => 0,
    'mode' => 0,
    'phonefile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d147152a253_51293968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d147152a253_51293968')) {function content_586d147152a253_51293968($_smarty_tpl) {?><table width="900" valign="top" border="0" cellspacing="0" cellpadding="0" class="tabForm">
  <tr>
    <td align='right'><?php echo $_smarty_tpl->tpl_vars['encoding']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?><span  class="required">*</span><?php }?></td>
    <td  colspan='4'><?php echo $_smarty_tpl->tpl_vars['encoding']->value['INPUT'];?>
</td>
  </tr>
  <tr>
    <td align='right'><?php echo $_smarty_tpl->tpl_vars['phonefile']->value['LABEL'];?>
: <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?><span  class="required">*</span><?php }?></td>
    <td  colspan='4'><?php echo $_smarty_tpl->tpl_vars['phonefile']->value['INPUT'];?>
</td>
  </tr>
</table>
<?php }} ?>
