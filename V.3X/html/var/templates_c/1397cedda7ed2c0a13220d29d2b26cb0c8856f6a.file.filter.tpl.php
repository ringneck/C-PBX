<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:58:31
         compiled from "/var/www/html/modules/asterisk_log/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20268303085a213e32747560-67688836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1397cedda7ed2c0a13220d29d2b26cb0c8856f6a' => 
    array (
      0 => '/var/www/html/modules/asterisk_log/themes/default/filter.tpl',
      1 => 1513863240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20268303085a213e32747560-67688836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213e327b4a37_59161677',
  'variables' => 
  array (
    'filter' => 0,
    'SHOW' => 0,
    'busqueda' => 0,
    'SEARCHNEXT' => 0,
    'ultima_busqueda' => 0,
    'ultimo_offset' => 0,
    'offset' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213e327b4a37_59161677')) {function content_5a213e327b4a37_59161677($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
    <tr class="letra12">
        <td width="7%" align="right"><?php echo $_smarty_tpl->tpl_vars['filter']->value['LABEL'];?>
: </td>
        <td width="10%" align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['filter']->value['INPUT'];?>
</td>
        <td align="left"><input class="button" type="submit" name="show" value="<?php echo $_smarty_tpl->tpl_vars['SHOW']->value;?>
"></td>
    </tr>
    <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['busqueda']->value['LABEL'];?>
:</td>
        <td align="left"><?php echo $_smarty_tpl->tpl_vars['busqueda']->value['INPUT'];?>
</td>
        <td align="left"><input class="button" type="submit" name="searchnext" value="<?php echo $_smarty_tpl->tpl_vars['SEARCHNEXT']->value;?>
"></td>
    </tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['ultima_busqueda']->value['INPUT'];?>

<?php echo $_smarty_tpl->tpl_vars['ultimo_offset']->value['INPUT'];?>

<?php echo $_smarty_tpl->tpl_vars['offset']->value['INPUT'];?>

<?php }} ?>
