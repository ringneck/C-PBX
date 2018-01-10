<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:55:14
         compiled from "/var/www/html/modules/dashboard/themes/default/appletgrid.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13521201135a2131963ef4b3-65508618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '649178a2ed927b3b587d511bcad2da445db69d8e' => 
    array (
      0 => '/var/www/html/modules/dashboard/themes/default/appletgrid.tpl',
      1 => 1513863238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13521201135a2131963ef4b3-65508618',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213196482ac3_78480590',
  'variables' => 
  array (
    'applet_col_1' => 0,
    'applet' => 0,
    'module_name' => 0,
    'LABEL_LOADING' => 0,
    'applet_col_2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213196482ac3_78480590')) {function content_5a213196482ac3_78480590($_smarty_tpl) {?><table width="80%" cellspacing="0" id="applet_grid" align="center">
<tr>
    <td class="appletcolumn" id="applet_col_1">
        <?php  $_smarty_tpl->tpl_vars['applet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['applet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['applet_col_1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['applet']->key => $_smarty_tpl->tpl_vars['applet']->value) {
$_smarty_tpl->tpl_vars['applet']->_loop = true;
?>
        <div class='appletwindow' id='portlet-<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
            <div class='appletwindow_topbar'>
                <div class='appletwindow_title' width='80%'><!-- <img src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/<?php echo $_smarty_tpl->tpl_vars['applet']->value['applet'];?>
/images/<?php echo $_smarty_tpl->tpl_vars['applet']->value['icon'];?>
' align='absmiddle' />&nbsp;--><?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
</div>
                <div class='appletwindow_widgets' align='right' width='10%'>
                    <a class='appletrefresh'>
                        <i class="fa fa-refresh" style="color:#aaa"></i>
                    </a>
                </div>
            </div>
            <div class='appletwindow_content' id='<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
                <div class='appletwindow_wait'><i style="color:#aaa;" class="fa fa-spinner fa-3x fa-pulse"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LABEL_LOADING']->value;?>
</div>
                <div class='appletwindow_fullcontent'></div>
            </div>
        </div>
        <?php } ?>
    </td>
    <td class="appletcolumn" id="applet_col_2">
        <?php  $_smarty_tpl->tpl_vars['applet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['applet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['applet_col_2']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['applet']->key => $_smarty_tpl->tpl_vars['applet']->value) {
$_smarty_tpl->tpl_vars['applet']->_loop = true;
?>
        <div class='appletwindow' id='portlet-<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
            <div class='appletwindow_topbar'>
                <div class='appletwindow_title' width='80%'><!-- <img src='modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/applets/<?php echo $_smarty_tpl->tpl_vars['applet']->value['applet'];?>
/images/<?php echo $_smarty_tpl->tpl_vars['applet']->value['icon'];?>
' align='absmiddle' />&nbsp;--><?php echo $_smarty_tpl->tpl_vars['applet']->value['name'];?>
</div>
                <div class='appletwindow_widgets' align='right' width='10%'>
                    <a class='appletrefresh'>
                        <i class="fa fa-refresh" style="color:#aaa"></i>
                    </a>
                </div>
            </div>
            <div class='appletwindow_content' id='<?php echo $_smarty_tpl->tpl_vars['applet']->value['code'];?>
'>
                <div class='appletwindow_wait'><i style="color:#aaa;" class="fa fa-spinner fa-3x fa-pulse"></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['LABEL_LOADING']->value;?>
</div>
                <div class='appletwindow_fullcontent'></div>
            </div>
        </div>
        <?php } ?>
    </td>
</tr>
</table><?php }} ?>
