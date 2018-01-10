<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:58:40
         compiled from "/var/www/html/modules/providers_accounts/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8736761665a2131007cc688-37177602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1738f92a66c6a6c4baf26e2c177c5e636a899ff' => 
    array (
      0 => '/var/www/html/modules/providers_accounts/themes/default/filter.tpl',
      1 => 1513863237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8736761665a2131007cc688-37177602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213100828f90_95847179',
  'variables' => 
  array (
    'url' => 0,
    'filter_field' => 0,
    'filter_value' => 0,
    'SHOW' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213100828f90_95847179')) {function content_5a213100828f90_95847179($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <form  method='POST' style='margin-bottom:0;' action='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'>
                <td align="left">
                    <?php echo $_smarty_tpl->tpl_vars['filter_field']->value['LABEL'];?>
:&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_field']->value['INPUT'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['filter_value']->value['INPUT'];?>

                    <input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
" />
                </td>
        </form>
    </tr>
</table><?php }} ?>
