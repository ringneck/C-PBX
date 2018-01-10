<?php /* Smarty version Smarty-3.1.21, created on 2017-12-22 14:28:49
         compiled from "/var/www/html/modules/userlist/themes/default/edit_userExtension.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13797061665a3c98116b5363-51631824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44a53e63ec638394c33d5f282b9f3336d35e5069' => 
    array (
      0 => '/var/www/html/modules/userlist/themes/default/edit_userExtension.tpl',
      1 => 1513863237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13797061665a3c98116b5363-51631824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'THEMENAME' => 0,
    'HEADER_LIBS_JQUERY' => 0,
    'MODULE_NAME' => 0,
    'icon' => 0,
    'title' => 0,
    'md_message_title' => 0,
    'CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a3c981179ec52_16311636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a3c981179ec52_16311636')) {function content_5a3c981179ec52_16311636($_smarty_tpl) {?><html>
    <head>
        <title>Elastix</title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css">
	<?php if ($_smarty_tpl->tpl_vars['THEMENAME']->value=="elastixneo") {?>
	<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/header.css" />
	<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/content.css" />
	<link rel="stylesheet" media="screen" type="text/css" href="themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/applet.css" />
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
libs/js/base.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
modules/<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
/themes/default/js/javascript.js"><?php echo '</script'; ?>
>
    </head>
    <body>
	<?php if ($_smarty_tpl->tpl_vars['THEMENAME']->value=="elastixneo") {?>
	  <div>
	    <div class="neo-module-title"><div class="neo-module-name-left"></div><span class="neo-module-name">
	      <?php if ($_smarty_tpl->tpl_vars['icon']->value!=null) {?>
	      <img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" width="22" height="22" align="absmiddle" />
	      <?php }?>
	      &nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span><div class="neo-module-name-right"></div>
	      </div>
	  <div class="neo-module-content">
	      <div class="div_msg_errors" id="message_error" style="display:none;">
	      <div style="float:left;">
		  <span id="mb_title" style="color:red;font-weight:bold"></span>
		  <br />
		  <span id="mb_message"></span>
	      </div>
	      <div style="text-align:right; padding:5px">
		  <input type="button" onclick="hide_message_error();" value="<?php echo $_smarty_tpl->tpl_vars['md_message_title']->value;?>
"/>
	      </div>
	    </div>
	      <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

	   </div>
	<?php } else { ?>
	    <table width="100%" cellspacing="0" cellpadding="0" border="0" align="center" class="message_board">
	      <tbody style="display:none" id="table_error"><tr>
		<td valign="middle" class="mb_title" id="mb_title"></td>
		</tr>
		<tr>
		    <td valign="middle" class="mb_message" id="mb_message"></td>
		</tr>
	    </tbody></table>
	    <div class="moduleTitle">
	      &nbsp;&nbsp;<img src="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" border="0" align="absmiddle">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

	    </div>
	    <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

	<?php }?>
    </body>
</html><?php }} ?>
