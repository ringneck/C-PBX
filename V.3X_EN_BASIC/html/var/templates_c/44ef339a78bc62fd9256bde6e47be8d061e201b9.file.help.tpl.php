<?php /* Smarty version Smarty-3.1.21, created on 2016-12-31 14:48:55
         compiled from "/var/www/html/themes/tenant/_common/help.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2047896343586746c7adb700-20439509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ef339a78bc62fd9256bde6e47be8d061e201b9' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/help.tpl',
      1 => 1479916886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2047896343586746c7adb700-20439509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'WEBPATH' => 0,
    'THEMENAME' => 0,
    'id_nodo' => 0,
    'name_nodo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586746c7b04ba1_49097563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586746c7b04ba1_49097563')) {function content_586746c7b04ba1_49097563($_smarty_tpl) {?><html>
  <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
  <head>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css" />
  </head>
  <frameset cols="20%,80%" border="1" > 
    <frame src="frameLeft.php?id_nodo=<?php echo $_smarty_tpl->tpl_vars['id_nodo']->value;?>
" name="navegacion" noresize>
    <frame src="frameRight.php?id_nodo=<?php echo $_smarty_tpl->tpl_vars['id_nodo']->value;?>
&name_nodo=<?php echo $_smarty_tpl->tpl_vars['name_nodo']->value;?>
" name="contenido" class="mainHelp" noresize>
  </frameset>
</html>
<?php }} ?>
