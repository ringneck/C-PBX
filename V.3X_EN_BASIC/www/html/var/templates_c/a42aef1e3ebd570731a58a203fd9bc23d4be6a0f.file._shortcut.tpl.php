<?php /* Smarty version Smarty-3.1.21, created on 2016-12-30 14:36:54
         compiled from "/var/www/html/themes/tenant/_common/_shortcut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3542685665865f27616e8e2-09017620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a42aef1e3ebd570731a58a203fd9bc23d4be6a0f' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/_shortcut.tpl',
      1 => 1479916886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3542685665865f27616e8e2-09017620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SHORTCUT_BOOKMARKS' => 0,
    'SHORTCUT_BOOKMARKS_LABEL' => 0,
    'shortcut' => 0,
    'SHORTCUT_HISTORY_LABEL' => 0,
    'SHORTCUT_HISTORY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5865f276187813_14866131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5865f276187813_14866131')) {function content_5865f276187813_14866131($_smarty_tpl) {?><li>
    <?php if ($_smarty_tpl->tpl_vars['SHORTCUT_BOOKMARKS']->value) {?>
        <a href="#">
            <i class="fa fa-star"></i>
            <span><?php echo $_smarty_tpl->tpl_vars['SHORTCUT_BOOKMARKS_LABEL']->value;?>
</span>
        </a>
        <ul>
            <?php  $_smarty_tpl->tpl_vars['shortcut'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shortcut']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SHORTCUT_BOOKMARKS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shortcut']->key => $_smarty_tpl->tpl_vars['shortcut']->value) {
$_smarty_tpl->tpl_vars['shortcut']->_loop = true;
?>
                <li>
                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['shortcut']->value['namemenu'];?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['shortcut']->value['name'];?>
</span>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php }?>
</li>

<li>
    <a href="#">
         <i class="fa fa-history"></i>
        <span><?php echo $_smarty_tpl->tpl_vars['SHORTCUT_HISTORY_LABEL']->value;?>
</span>
    </a>
    <ul>
        <?php  $_smarty_tpl->tpl_vars['shortcut'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['shortcut']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SHORTCUT_HISTORY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['shortcut']->key => $_smarty_tpl->tpl_vars['shortcut']->value) {
$_smarty_tpl->tpl_vars['shortcut']->_loop = true;
?>
            <li>
                <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['shortcut']->value['namemenu'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['shortcut']->value['name'];?>
</span>
                </a>
            </li>
        <?php } ?>
    </ul>
</li><?php }} ?>
