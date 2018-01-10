<?php /* Smarty version Smarty-3.1.21, created on 2016-12-30 14:56:34
         compiled from "/var/www/html/modules/registration/themes/default/_cloud_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12024952415865f7124615a8-34446079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d336ee34324776fd4625778dbd5868369f663f' => 
    array (
      0 => '/var/www/html/modules/registration/themes/default/_cloud_login.tpl',
      1 => 1479916885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12024952415865f7124615a8-34446079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'registration_server' => 0,
    'INFO_REGISTER' => 0,
    'EMAIL' => 0,
    'PASSWORD' => 0,
    'registration' => 0,
    'SIGNUP_ACTION' => 0,
    'REGISTER_ACTION' => 0,
    'sending' => 0,
    'FORGET_PASSWORD' => 0,
    'ELASTIX_LICENSED' => 0,
    'BY' => 0,
    'currentyear' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5865f71249fe81_75374054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5865f71249fe81_75374054')) {function content_5865f71249fe81_75374054($_smarty_tpl) {?><link href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/css/styles.css" rel="stylesheet" />
<div onKeyPress="return checkSubmit(event)">
<div id="moduleContainer">
    
    <div class="div_content_style">
    <div class="title_login_register"><?php echo $_smarty_tpl->tpl_vars['registration_server']->value;?>
</div>
    <div class="text_info_registration">
        <?php echo $_smarty_tpl->tpl_vars['INFO_REGISTER']->value;?>

        <div class="close_info" onclick="hideInfoRegistration()">x</div>
    </div>
	
    <div class="info_registration" onclick="showInfoRegistration()">?</div>
        <div id='cloud-login-content'>
           <div id="cloud-login-logo">
                <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/elastix_logo.gif" alt="elastix logo" />
            </div>
            <div class="cloud-login-line">
                <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/icon_user.png" height="18px" alt="elastix logo" class="cloud-login-img-input"/>
                <input type="text" id="input_user" name="input_user" class="cloud-login-input" defaultVal="<?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
"/>
            </div>
            <div class="cloud-login-line">
                <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/icon_password.png" alt="elastix logo" class="cloud-login-img-input"/>
                <input type="password" id="input_pass" name="input_pass" class="cloud-login-input" defaultVal="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
"/>
            </div>
            <div class="cloud-login-line action_register_button" >                
                <input type="button" name="input_signup" class="cloud-signup-button" onclick="showPopupCloudRegister('<?php echo $_smarty_tpl->tpl_vars['registration']->value;?>
',540,388)" value="<?php echo $_smarty_tpl->tpl_vars['SIGNUP_ACTION']->value;?>
" style="margin-left:20px" />
                <input type="button" name="input_register" class="cloud-login-button" onclick="registrationByAccount();" value="<?php echo $_smarty_tpl->tpl_vars['REGISTER_ACTION']->value;?>
"/>
                <input type="hidden" name="msgtmp" id="msgtmp" value="<?php echo $_smarty_tpl->tpl_vars['sending']->value;?>
" />
            </div>
            <div class="cloud-login-line" >
                <a class="cloud-link_subscription" href="#" ><?php echo $_smarty_tpl->tpl_vars['FORGET_PASSWORD']->value;?>
</a>
            </div>
             
            <div id="msnTextErr" align="center"></div>
            
            <div class="cloud-footernote"><a href="http://www.elastix.com" style="text-decoration: none;" target='_blank'>Elastix</a> <?php echo $_smarty_tpl->tpl_vars['ELASTIX_LICENSED']->value;?>
 <a href="http://www.opensource.org/licenses/gpl-license.php" style="text-decoration: none;" target='_blank'>GPL</a> <?php echo $_smarty_tpl->tpl_vars['BY']->value;?>
 <a href="http://www.palosanto.com" style="text-decoration: none;" target='_blank'>PaloSanto Solutions</a>. 2006 - <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
.</div>
             
        </div>
    </div>
</div>
</div>

<?php echo '<script'; ?>
 src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/js/javascript.js" type="text/javascript"><?php echo '</script'; ?>
>


<?php }} ?>
