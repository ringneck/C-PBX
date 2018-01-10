<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:55:15
         compiled from "/var/www/html/themes/tenant/_common/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19300408235a2130f69b09b1-99389631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f0a18ba432f95a450b0e2b727933465c171336' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/index.tpl',
      1 => 1513863250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19300408235a2130f69b09b1-99389631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a2130f6a2b961_80504950',
  'variables' => 
  array (
    'WEBPATH' => 0,
    'THEMENAME' => 0,
    'HEADER_LIBS_JQUERY' => 0,
    'HEADER' => 0,
    'HEADER_MODULES' => 0,
    'BODYPARAMS' => 0,
    'MENU' => 0,
    'mb_message' => 0,
    'mb_title' => 0,
    'CONTENT' => 0,
    'currentyear' => 0,
    'SAVE_NOTE' => 0,
    'AUTO_POPUP' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2130f6a2b961_80504950')) {function content_5a2130f6a2b961_80504950($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
        <title>얼쑤 D-PBX</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-core.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-theme.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-forms.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/custom.css">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/styles.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/widgets.css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/help.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/header.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/content.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/applet.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
libs/js/sticky_note/sticky_note.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/table.css" />

    <?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>


	<?php echo '<script'; ?>
 type='text/javascript' src="libs/js/base.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src="libs/js/sticky_note/sticky_note.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src="libs/js/iframe.js"><?php echo '</script'; ?>
>

        <?php echo $_smarty_tpl->tpl_vars['HEADER']->value;?>

    <?php echo $_smarty_tpl->tpl_vars['HEADER_MODULES']->value;?>

    </head>
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="mainBody page-body" <?php echo $_smarty_tpl->tpl_vars['BODYPARAMS']->value;?>
>
    <div class="page-container">

        <?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>
 <!-- Viene del tpl menu.tlp-->
        <?php if (!empty($_smarty_tpl->tpl_vars['mb_message']->value)) {?>
        <div class="div_msg_errors" id="message_error">
           <?php if (!empty($_smarty_tpl->tpl_vars['mb_title']->value)) {?>
           <div class="div_msg_errors_title" style="padding-left:5px">
              <b style="color:red;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mb_title']->value;?>
</b>
           </div>
           <?php }?>
           <div class="div_msg_errors_dismiss">
               <i class="fa fa-remove" javascript="onclick='hide_message_error();'"></i>
           </div>
            <div style="padding:6px 30px 6px 15px">
            <?php echo $_smarty_tpl->tpl_vars['mb_message']->value;?>

            </div>
        </div>
        <?php }?>
                <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

            </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class="main" style="margin-left:16px;">
		<h5><strong>Supported By</strong> <a href="http://www.olssoo.com" style="text-decoration: none;" target='_blank'><strong>OLSSOO FACTORY Inc</strong></a><strong>. 2014 - <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
.</strong></div></h5>
        </footer>

        <br />

         <div id="neo-sticky-note">
                  <div id="neo-sticky-note-text"></div>
                  <div id="neo-sticky-note-text-edit">
                        <textarea id="neo-sticky-note-textarea"></textarea>
                        <div id="neo-sticky-note-text-char-count"></div>
                        <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['SAVE_NOTE']->value;?>
" id="neo-submit-button" />
                        <div id="auto-popup">AutoPopUp <input type="checkbox" id="neo-sticky-note-auto-popup" value="1"></div>
                  </div>
                  <div id="neo-sticky-note-text-edit-delete"></div>
                </div>

<?php if ($_smarty_tpl->tpl_vars['AUTO_POPUP']->value=='1') {?>
<?php echo '<script'; ?>
 type='text/javascript'>
$(document).ready(function(e) {
    $("#neo-sticky-note-auto-popup").prop('checked', true);
    $('#togglestickynote1').click();
});
<?php echo '</script'; ?>
>
<?php }?>

        <!-- Neo Progress Bar -->
        <div class="neo-modal-elastix-popup-box">
            <div class="neo-modal-elastix-popup-title"></div>
            <div class="neo-modal-elastix-popup-close"></div>
            <div class="neo-modal-elastix-popup-content"></div>
        </div>
        <div class="neo-modal-elastix-popup-blockmask"></div>

    <!-- Bottom Scripts -->
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/gsap/main-gsap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/joinable.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/resizeable.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-api.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-login.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-demo.js"><?php echo '</script'; ?>
>
    </div>
    </body>
</html>
<?php }} ?>
