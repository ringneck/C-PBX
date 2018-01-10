<?php /* Smarty version Smarty-3.1.21, created on 2017-01-05 01:23:52
         compiled from "/var/www/html/modules/calls_detail/themes/default/filter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256143005586d2198c6cfd7-34070878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c5bacbfc9abf8730d1add76fce8d151d1b5440' => 
    array (
      0 => '/var/www/html/modules/calls_detail/themes/default/filter.tpl',
      1 => 1431109721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256143005586d2198c6cfd7-34070878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date_start' => 0,
    'Filter' => 0,
    'calltype' => 0,
    'date_end' => 0,
    'agent' => 0,
    'phone' => 0,
    'queue' => 0,
    'INCOMING_CAMPAIGN' => 0,
    'OUTGOING_CAMPAIGN' => 0,
    'id_campaign_in' => 0,
    'id_campaign_out' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_586d2198cb57a9_55157520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586d2198cb57a9_55157520')) {function content_586d2198cb57a9_55157520($_smarty_tpl) {?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
        <td width="10%"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
 <input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
        <td><?php echo $_smarty_tpl->tpl_vars['calltype']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['calltype']->value['INPUT'];?>
 <input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
    </tr>
    <tr class="letra12">
        <td><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['agent']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['agent']->value['INPUT'];?>
</td>
    </tr>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['phone']->value['INPUT'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
    </tr>
<?php if ($_smarty_tpl->tpl_vars['INCOMING_CAMPAIGN']->value||$_smarty_tpl->tpl_vars['OUTGOING_CAMPAIGN']->value) {?>
    <tr>
        <td colspan="2">&nbsp;</td>
        <?php if ($_smarty_tpl->tpl_vars['INCOMING_CAMPAIGN']->value) {?>
        <td><?php echo $_smarty_tpl->tpl_vars['id_campaign_in']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['id_campaign_in']->value['INPUT'];?>
</td>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['OUTGOING_CAMPAIGN']->value) {?>
        <td><?php echo $_smarty_tpl->tpl_vars['id_campaign_out']->value['LABEL'];?>
:</td>
        <td><?php echo $_smarty_tpl->tpl_vars['id_campaign_out']->value['INPUT'];?>
</td>
        <?php }?>
    </tr>
<?php }?>
</table>

<?php }} ?>
