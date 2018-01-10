<?php /* Smarty version Smarty-3.1.21, created on 2017-03-02 11:03:52
         compiled from "/var/www/html/modules/dest_distribution/themes/default/dest_distribution.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149267092658b77d88ce9903-87039804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1123f923352c09a9c17b921af36fb7e068ea0d6a' => 
    array (
      0 => '/var/www/html/modules/dest_distribution/themes/default/dest_distribution.tpl',
      1 => 1468305274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149267092658b77d88ce9903-87039804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'contentFilter' => 0,
    'URL_GRAPHIC' => 0,
    'mostrarSumario' => 0,
    'Rate_Name' => 0,
    'Title_Criteria' => 0,
    'results' => 0,
    'fila' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58b77d88d05317_33433682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b77d88d05317_33433682')) {function content_58b77d88d05317_33433682($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center" class="tabForm">
<tr>
    <td>
        <form method="POST" style="margin-bottom:0;" action="?menu=<?php echo $_smarty_tpl->tpl_vars['menu']->value;?>
">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
                <tr class="letra12"><?php echo $_smarty_tpl->tpl_vars['contentFilter']->value;?>
</tr>
            </table>
        </form>
    </td>
</tr>
<tr>
<td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
        <p align='center'><img alt="Graphic" src="<?php echo $_smarty_tpl->tpl_vars['URL_GRAPHIC']->value;?>
" /></p>
        </td>
    </tr>
    <?php if ($_smarty_tpl->tpl_vars['mostrarSumario']->value) {?>
    <tr>
        <td>
        <table class="table_data" align="center" cellspacing="0" cellpadding="0">
        <tr class="table_title_row">
            <td align='center' class="table_title_row borderLeft" style="background:none;"><?php echo $_smarty_tpl->tpl_vars['Rate_Name']->value;?>
</td>
            <td align='center' class="table_title_row"><?php echo $_smarty_tpl->tpl_vars['Title_Criteria']->value;?>
</td>
            <td align='center' class="table_title_row borderRight">%</td>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['fila'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fila']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fila']->key => $_smarty_tpl->tpl_vars['fila']->value) {
$_smarty_tpl->tpl_vars['fila']->_loop = true;
?>
        <tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fila']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
	    <td class="table_data" align="right"><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</td>
            <?php } ?>
        </tr>
        <?php } ?>
        </table>
        </td>
    </tr>
    <?php }?>
    </table>
</td>
</tr>
</table><?php }} ?>
