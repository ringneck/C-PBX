<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:58:42
         compiled from "/var/www/html/modules/providers_accounts/themes/default/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5253381685a2269fb526200-69384020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d83d34cb05b0649a487e9e5cf9717ba8f1d6c19' => 
    array (
      0 => '/var/www/html/modules/providers_accounts/themes/default/form.tpl',
      1 => 1513863237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5253381685a2269fb526200-69384020',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a2269fb66e205_46679308',
  'variables' => 
  array (
    'mode' => 0,
    'SAVE' => 0,
    'CANCEL' => 0,
    'EDIT' => 0,
    'REQUIRED_FIELD' => 0,
    'advanced' => 0,
    'General_Setting' => 0,
    'type_provider_voip' => 0,
    'status' => 0,
    'account_name' => 0,
    'username' => 0,
    'secret' => 0,
    'callerID' => 0,
    'PEER_Details' => 0,
    'type' => 0,
    'technology' => 0,
    'qualify' => 0,
    'canreinvite' => 0,
    'insecure' => 0,
    'sendrpid' => 0,
    'dtmfmode' => 0,
    'trustrpid' => 0,
    'host' => 0,
    'context' => 0,
    'disallow' => 0,
    'allow' => 0,
    'fromuser' => 0,
    'fromdomain' => 0,
    'ID' => 0,
    'ID_TRUNK' => 0,
    'Module_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2269fb66e205_46679308')) {function content_5a2269fb66e205_46679308($_smarty_tpl) {?>
<table width="100%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <?php if ($_smarty_tpl->tpl_vars['mode']->value=='input') {?>
        <td align="left">
            <input class="button" type="submit" name="save_new" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
">&nbsp;&nbsp;
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
        <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=='view') {?>
        <td align="left">
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
        <?php } elseif ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
        <td align="left">
            <input class="button" type="submit" name="save_edit" value="<?php echo $_smarty_tpl->tpl_vars['EDIT']->value;?>
">&nbsp;&nbsp;
            <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
">
        </td>
        <?php }?>
        <td align="right" nowrap><span class="letra12"><span  class="required">*</span> <?php echo $_smarty_tpl->tpl_vars['REQUIRED_FIELD']->value;?>
</span></td>
    </tr>
</table>


<table class="tabForm" style="font-size: 16px; height: 400px" width="100%">
	<H3><b><span  class="required">*</span>얼쑤트렁크 신청문의 : 1800-2471</span></b></H3>
    <tr>
    <td id="header_detail" valign = 'top'>
        <div align = "right" class = "sombreado"><?php echo $_smarty_tpl->tpl_vars['advanced']->value['LABEL'];?>
 <?php echo $_smarty_tpl->tpl_vars['advanced']->value['INPUT'];?>
</div>
        <fieldset class="fielform">
            <legend class="sombreado"><?php echo $_smarty_tpl->tpl_vars['General_Setting']->value;?>
</legend>
            <table border="0" width="100%" cellspacing="0" cellpadding="8" >
                <tr class="letra12">
                    <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['type_provider_voip']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['type_provider_voip']->value['INPUT'];?>
</td>
                </tr>
				<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
				<tr class="letra12">
                    <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['status']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['status']->value['INPUT'];?>
</td>
                </tr>
				<?php }?>
                <tr class="letra12">
                    <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['account_name']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['account_name']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12">
                    <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['username']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['username']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12">
                    <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['secret']->value['LABEL'];?>
: <span  class="required">*</span></b></td>
                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['secret']->value['INPUT'];?>
</td>
                </tr>
                 <tr class="letra12">
                    <td align="left"><b><?php echo $_smarty_tpl->tpl_vars['callerID']->value['LABEL'];?>
:</b></td>
                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['callerID']->value['INPUT'];?>
</td>
                </tr>
            </table>
        </fieldset>
    </td>

    <td id="detail">
        <fieldset class="fielform" id="advanced_options" style = "display:none;">
            <legend class="sombreado"><?php echo $_smarty_tpl->tpl_vars['PEER_Details']->value;?>
</legend>
            <table border="0" width="100%" id="formContainer" align="center" cellspacing="0" cellpadding="8">
                <tr class="letra12">
                    <td align="left"><b> <?php echo $_smarty_tpl->tpl_vars['type']->value['LABEL'];?>
:</b><span  class="required">*</span></td>
                    <td align="left"><?php echo $_smarty_tpl->tpl_vars['type']->value['INPUT'];?>
</td>
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['technology']->value['LABEL'];?>
:</label></b></td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['technology']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12">
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['qualify']->value['LABEL'];?>
:</label></b></td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['qualify']->value['INPUT'];?>
</td>
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['canreinvite']->value['LABEL'];?>
:</label></b></td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['canreinvite']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12">
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['insecure']->value['LABEL'];?>
:</label></b></td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['insecure']->value['INPUT'];?>
</td>
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['sendrpid']->value['LABEL'];?>
:</label></b></td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['sendrpid']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12" >
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['dtmfmode']->value['LABEL'];?>
:</label></b></td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['dtmfmode']->value['INPUT'];?>
</td>
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['trustrpid']->value['LABEL'];?>
:</label></b></td>
                    <td ><?php echo $_smarty_tpl->tpl_vars['trustrpid']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12" >
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['host']->value['LABEL'];?>
:</label><span class="required">*</span></b></td>
                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['host']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12" >
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['context']->value['LABEL'];?>
:</label><span class="required">*</span></b></td>
                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['context']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12" >
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['disallow']->value['LABEL'];?>
:</label></b></td>
                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['disallow']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12" >
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['allow']->value['LABEL'];?>
:</label></b></td>
                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['allow']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12" >
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['fromuser']->value['LABEL'];?>
:</label></b></td>
                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['fromuser']->value['INPUT'];?>
</td>
                </tr>
                <tr class="letra12" >
                    <td align="left"><b><label> <?php echo $_smarty_tpl->tpl_vars['fromdomain']->value['LABEL'];?>
:</label></b></td>
                    <td colspan="3"><?php echo $_smarty_tpl->tpl_vars['fromdomain']->value['INPUT'];?>
</td>
                </tr>
            </table>
        </fieldset>
    </td>
    </tr>
</table>


<input class="button" type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" />
<input class="button" type="hidden" name="idTrunk" value="<?php echo $_smarty_tpl->tpl_vars['ID_TRUNK']->value;?>
" />
<input class="button" type="hidden" id="module_name" name="module_name" value="<?php echo $_smarty_tpl->tpl_vars['Module_name']->value;?>
" />

<?php if ($_smarty_tpl->tpl_vars['mode']->value=='edit') {?>
<input class="button" type="hidden" name="editStatus" id="editStatus" value="on" />
<?php } else { ?>
<input class="button" type="hidden" name="editStatus" id="editStatus" value="off" />
<?php }?><?php }} ?>
