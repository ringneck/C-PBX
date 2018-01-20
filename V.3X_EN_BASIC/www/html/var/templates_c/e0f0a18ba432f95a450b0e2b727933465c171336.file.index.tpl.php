<?php /* Smarty version Smarty-3.1.21, created on 2016-12-30 14:36:54
         compiled from "/var/www/html/themes/tenant/_common/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34789265865f276248ab0-98655919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0f0a18ba432f95a450b0e2b727933465c171336' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/index.tpl',
      1 => 1479916886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34789265865f276248ab0-98655919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEBPATH' => 0,
    'THEMENAME' => 0,
    'HEADER_LIBS_JQUERY' => 0,
    'WEBCOMMON' => 0,
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
    'ELASTIX_PANELS' => 0,
    'LBL_ELASTIX_PANELS_SIDEBAR' => 0,
    'panelname' => 0,
    'paneldata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5865f2762c9452_61519341',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5865f2762c9452_61519341')) {function content_5865f2762c9452_61519341($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
        <title>Elastix</title>

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
    <link rel="stylesheet" media="screen" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/rightbar.css" />

    <?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>

        <!--<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
js/base.js"><?php echo '</script'; ?>
>-->
        <!--<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
js/sticky_note.js"><?php echo '</script'; ?>
>-->
        <!--<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
js/iframe.js"><?php echo '</script'; ?>
>-->
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
                        <div class="div_msg_errors_title">
                            <b style="color:red;">&nbsp;<?php echo $_smarty_tpl->tpl_vars['mb_title']->value;?>
</b>
                        </div>
                    <?php }?>
                        <div class="div_msg_errors_dismiss"><i class="fa fa-lg fa-remove" onclick="hide_message_error();"></i></div>
                        <div class="div_msg_errors_content" <?php if (empty($_smarty_tpl->tpl_vars['mb_title']->value)) {?>style="margin-left: 0;"<?php }?>><?php echo $_smarty_tpl->tpl_vars['mb_message']->value;?>
</div>
                    </div>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>

                </div>
            </div>
        </div><!-- neo-contentbox -->

        <!-- Footer -->
        <footer class="main" style="margin-left:16px;">
            <a href="http://www.elastix.com" style="color: #444; text-decoration: none;" target='_blank'>Elastix</a> is licensed under <a href="http://www.opensource.org/licenses/gpl-license.php" target='_blank' style="color: #444; text-decoration: none;" >GPL</a> by <a href="http://www.palosanto.com" target='_blank' style="color: #444; text-decoration: none;">PaloSanto Solutions</a>. 2006 - <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
.
        </footer>

        
        </div><!-- main-content -->

        <div id="neo-sticky-note">
            <div id="neo-sticky-note-text"></div>
            <div id="neo-sticky-note-text-edit">
                <textarea id="neo-sticky-note-textarea"></textarea>
                <div id="neo-sticky-note-text-char-count"></div>
                <input type="button" value="<?php echo $_smarty_tpl->tpl_vars['SAVE_NOTE']->value;?>
" id="neo-submit-button" />
                <div id="auto-popup">AutoPopUp <input type="checkbox" id="neo-sticky-note-auto-popup" value="1" /></div>
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
<?php if ($_smarty_tpl->tpl_vars['ELASTIX_PANELS']->value) {?>
        <div id="chat" class="fixed">
            <div class="chat-inner">
                <h2 class="chat-header">
                    <a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
                    <i class="entypo-users"></i>
                    
                    <span id="panel-header-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['LBL_ELASTIX_PANELS_SIDEBAR']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </h2>
                <div id="elastix-panels" class="panel-group joined">
                    <?php  $_smarty_tpl->tpl_vars['paneldata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['paneldata']->_loop = false;
 $_smarty_tpl->tpl_vars['panelname'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ELASTIX_PANELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['paneldata']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['paneldata']->key => $_smarty_tpl->tpl_vars['paneldata']->value) {
$_smarty_tpl->tpl_vars['paneldata']->_loop = true;
 $_smarty_tpl->tpl_vars['panelname']->value = $_smarty_tpl->tpl_vars['paneldata']->key;
 $_smarty_tpl->tpl_vars['paneldata']->index++;
 $_smarty_tpl->tpl_vars['paneldata']->first = $_smarty_tpl->tpl_vars['paneldata']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['elastixpanel']['first'] = $_smarty_tpl->tpl_vars['paneldata']->first;
?>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#elastix-panels" href="#elastix-panel-<?php echo $_smarty_tpl->tpl_vars['panelname']->value;?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['paneldata']->value['iconclass']) {?>
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['paneldata']->value['iconclass'];?>
"></i>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['paneldata']->value['icon']) {?>
                                    <div style="display: inline-block; min-width: 15px; min-height: 15px; padding-right: 5px;">
                                    <img alt="" src="<?php echo $_smarty_tpl->tpl_vars['paneldata']->value['icon'];?>
" width="15" />
                                    </div>
                                    <?php } else { ?>
                                    <i class="fa fa-file-o"></i>
                                    <?php }?>
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paneldata']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </a>
                            </h4>
                        </div>
                        <div id="elastix-panel-<?php echo $_smarty_tpl->tpl_vars['panelname']->value;?>
" class="panel-collapse collapse<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['elastixpanel']['first']) {?> in<?php }?>">
                            <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['paneldata']->value['content'];?>
</div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
<?php }?>
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
