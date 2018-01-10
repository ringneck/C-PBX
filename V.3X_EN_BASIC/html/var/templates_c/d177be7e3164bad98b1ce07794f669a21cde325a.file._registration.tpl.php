<?php /* Smarty version Smarty-3.1.21, created on 2017-03-02 20:47:22
         compiled from "/var/www/html/modules/registration/themes/default/_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53540768158b8064a90d319-35970846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd177be7e3164bad98b1ce07794f669a21cde325a' => 
    array (
      0 => '/var/www/html/modules/registration/themes/default/_registration.tpl',
      1 => 1479916886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53540768158b8064a90d319-35970846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'identitykeylbl' => 0,
    'companyReg' => 0,
    'countryReg' => 0,
    'cityReg' => 0,
    'phoneReg' => 0,
    'addressReg' => 0,
    'contactNameReg' => 0,
    'emailReg' => 0,
    'USERNAME' => 0,
    'passwdReg' => 0,
    'passwdConfReg' => 0,
    'Activate_registration' => 0,
    'sending' => 0,
    'REQUIRED_FIELD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58b8064a958035_86562073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8064a958035_86562073')) {function content_58b8064a958035_86562073($_smarty_tpl) {?><link href="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/themes/default/css/styles.css" rel="stylesheet" />

<div id="moduleContainer">
    <div class="div_content_style">
      <div class="div_table_style">
            <div class="div_tr1_style">
                <div class="div_td1_style tdIdServer"><?php echo $_smarty_tpl->tpl_vars['identitykeylbl']->value;?>
</div>
                <div class="div_td2_style tdIdServer"><b id="identitykey" class="b-style"></b></div>               
            </div>
            <div class="div_tr2_style">
                <div class="div_td1_style"><?php echo $_smarty_tpl->tpl_vars['companyReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style"><?php echo $_smarty_tpl->tpl_vars['companyReg']->value['INPUT'];?>
 <span class="required">*</span></div>              
            </div>
            <div class="div_tr1_style">
                <div class="div_td1_style"><?php echo $_smarty_tpl->tpl_vars['countryReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style"><?php echo $_smarty_tpl->tpl_vars['countryReg']->value['INPUT'];?>
 <span class="required">*</span></div>               
            </div>
            <div class="div_tr2_style">
                <div class="div_td1_style"><?php echo $_smarty_tpl->tpl_vars['cityReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style" style="width:140px"><?php echo $_smarty_tpl->tpl_vars['cityReg']->value['INPUT'];?>
 <span class="required">*</span></div>              
                <div class="div_td1_style" style="width:75px"><?php echo $_smarty_tpl->tpl_vars['phoneReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style" style="width:140px"><?php echo $_smarty_tpl->tpl_vars['phoneReg']->value['INPUT'];?>
 </div> 
            </div>
            <div class="div_tr1_style">
                <div class="div_td1_style"><?php echo $_smarty_tpl->tpl_vars['addressReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style"><?php echo $_smarty_tpl->tpl_vars['addressReg']->value['INPUT'];?>
</div>               
            </div>           
            <div class="div_tr2_style">
                <div class="div_td1_style"><?php echo $_smarty_tpl->tpl_vars['contactNameReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style"><?php echo $_smarty_tpl->tpl_vars['contactNameReg']->value['INPUT'];?>
 <span class="required">*</span></div>                              
            </div>
            <div class="div_tr1_style">
                <div class="div_td1_style"><?php echo $_smarty_tpl->tpl_vars['emailReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style"><?php echo $_smarty_tpl->tpl_vars['emailReg']->value['INPUT'];?>
 <span class="required">*</span> (<?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
)</div>
            </div>
            <div class="div_tr2_style">
                <div class="div_td1_style"><?php echo $_smarty_tpl->tpl_vars['passwdReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style"><?php echo $_smarty_tpl->tpl_vars['passwdReg']->value['INPUT'];?>
 <span class="required">*</span></div>                                             
            </div>
            <div class="div_tr1_style">
                <div class="div_td1_style"><?php echo $_smarty_tpl->tpl_vars['passwdConfReg']->value['LABEL'];?>
</div>
                <div class="div_td2_style"><?php echo $_smarty_tpl->tpl_vars['passwdConfReg']->value['INPUT'];?>
 <span class="required">*</span></div>                                                                   
            </div> 
            <div class="div_tr1_style" id="tdButtons">
                <input type="button" class="cloud-signup-button" style="width:160px" value="<?php echo $_smarty_tpl->tpl_vars['Activate_registration']->value;?>
" name="btnAct" id="btnAct" onclick="registration();" />
                <input type="hidden" name="msgtmp" id="msgtmp" value="<?php echo $_smarty_tpl->tpl_vars['sending']->value;?>
"/>
            </div>
            <div id="msnTextErr" align="center" style="bottom:1px !important;"></div>
            <div class="required_field"> <span class="required">*</span><?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</div>
       </div>
    </div>
</div>

<?php }} ?>
