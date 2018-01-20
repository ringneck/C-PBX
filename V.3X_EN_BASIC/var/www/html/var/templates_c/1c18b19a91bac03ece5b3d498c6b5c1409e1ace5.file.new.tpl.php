<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 00:33:05
         compiled from "/var/www/html/modules/dont_call_list/themes/default/new.tpl" */ ?>
<?php /*%%SmartyHeaderCode:286236032586d15b17bf865-10801516%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c18b19a91bac03ece5b3d498c6b5c1409e1ace5' => 
    array (
      0 => '/var/www/html/modules/dont_call_list/themes/default/new.tpl',
      1 => 1410976670,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '286236032586d15b17bf865-10801516',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SAVE' => 0,
    'CANCEL' => 0,
    'new_accion' => 0,
    'file_number' => 0,
    'LABEL_MAX_FILESIZE' => 0,
    'txt_new_number' => 0,
    'id_formulario' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d15b17f04c3_80304280',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d15b17f04c3_80304280')) {function content_586d15b17f04c3_80304280($_smarty_tpl) {?><form method="POST" name="form_formulario" enctype="multipart/form-data">
    <table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
            <td>
                <table width="100%" cellpadding="3" cellspacing="0" border="0">
                    <tr>
                        <td align="left">
                        <input class="button" type="submit" name="apply_changes" value="<?php echo $_smarty_tpl->tpl_vars['SAVE']->value;?>
" />
                        <input class="button" type="submit" name="cancel" value="<?php echo $_smarty_tpl->tpl_vars['CANCEL']->value;?>
" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
                    <tr>
                        <td colspan="2"><?php echo $_smarty_tpl->tpl_vars['new_accion']->value['INPUT'];?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['file_number']->value['LABEL'];?>
:<br/><?php echo $_smarty_tpl->tpl_vars['LABEL_MAX_FILESIZE']->value;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['file_number']->value['INPUT'];?>
</td>
                    </tr>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['txt_new_number']->value['LABEL'];?>
:</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['txt_new_number']->value['INPUT'];?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <?php echo $_smarty_tpl->tpl_vars['id_formulario']->value['INPUT'];?>

</form>

<?php echo '<script'; ?>
 type="text/javascript">
function new_accion_update(accion)
{
    if (accion == 'file') {
        $('input[name="txt_new_number"]').parents('tr:first').hide();
        $('input[name="file_number"]').parents('tr:first').show();
    }
    if (accion == 'text') {
        $('input[name="file_number"]').parents('tr:first').hide();
        $('input[name="txt_new_number"]').parents('tr:first').show();
    }
}

$(document).ready(function() {
	$('input[name="new_accion"]').on('change', function () {
		new_accion_update($('input[name="new_accion"]:checked').val());
	});
	
	new_accion_update($('input[name="new_accion"]:checked').val());
});
<?php echo '</script'; ?>
>
<?php }} ?>
