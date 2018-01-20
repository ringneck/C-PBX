<?php /* Smarty version Smarty-3.1.21, created on 2016-12-31 14:46:49
         compiled from "/var/www/html/themes/tenant/_common/_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198989418558674649999363-73794210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bab47466b9631cbd9028ccd6485067b735aa9aa' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/_list.tpl',
      1 => 1479916886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198989418558674649999363-73794210',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'arrActions' => 0,
    'accion' => 0,
    'contentFilter' => 0,
    'AS_OPTION' => 0,
    'MORE_OPTIONS' => 0,
    'FILTER_GRID_SHOW' => 0,
    'enableExport' => 0,
    'DOWNLOAD_GRID' => 0,
    'pagingShow' => 0,
    'numPage' => 0,
    'start' => 0,
    'lblStart' => 0,
    'lblPrevious' => 0,
    'lblPage' => 0,
    'currentPage' => 0,
    'lblof' => 0,
    'end' => 0,
    'total' => 0,
    'lblNext' => 0,
    'lblEnd' => 0,
    'arrFiltersControl' => 0,
    'filterc' => 0,
    'numColumns' => 0,
    'header' => 0,
    'numData' => 0,
    'arrData' => 0,
    'data' => 0,
    'NO_DATA_FOUND' => 0,
    'FILTER_GRID_HIDE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_58674649b23717_16342312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58674649b23717_16342312')) {function content_58674649b23717_16342312($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/share/php/Smarty/plugins/function.html_options.php';
?><form class="elastix-standard-formgrid" id="idformgrid" method="POST" style="margin-bottom:0;" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">

<input type="submit" name="" value="" style="height: 0; min-height: 0; font-size: 0; width: 0; border: none; outline: none; padding: 0px; margin: 0px; box-sizing: border-box; float: left;" />
    <div class="neo-table-header-row">
        <?php  $_smarty_tpl->tpl_vars['accion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['accion']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrActions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['accion']->key => $_smarty_tpl->tpl_vars['accion']->value) {
$_smarty_tpl->tpl_vars['accion']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['accion']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['accion']->value['type']=='link') {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" class="neo-table-action" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> >
                    <div class="neo-table-header-row-filter">
                    <button type="button" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" class="neo-table-toolbar-button" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['ocolor'])) {?> style="background-color:#<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
; border:1px solid #<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
;" <?php }?>>
                       <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['iconclass'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['accion']->value['iconclass'];?>
"></i> <?php } elseif (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle"  /><?php }
echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>

                    </button>
                    </div>
                </a>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type']=='button') {?>
                <div class="neo-table-header-row-filter">
                    <button type="button" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> class="neo-table-toolbar-button" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['ocolor'])) {?> style="background-color:#<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
; border:1px solid #<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
;" <?php }?>>
                       <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['iconclass'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['accion']->value['iconclass'];?>
"></i> <?php } elseif (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle"  /><?php }
echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>

                    </button>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type']=='submit') {?>
                <div class="neo-table-header-row-filter">
                    <button type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onclick'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onclick'];?>
" <?php }?> class="neo-table-toolbar-button" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['ocolor'])) {?> style="background-color:#<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
; border:1px solid #<?php echo $_smarty_tpl->tpl_vars['accion']->value['ocolor'];?>
;" <?php }?>>
                       <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['iconclass'])) {?><i class="<?php echo $_smarty_tpl->tpl_vars['accion']->value['iconclass'];?>
"></i> <?php } elseif (!empty($_smarty_tpl->tpl_vars['accion']->value['icon'])) {?><img border="0" src="<?php echo $_smarty_tpl->tpl_vars['accion']->value['icon'];?>
" align="absmiddle"  /><?php }
echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>

                    </button>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type']=='text') {?>
                <div class="neo-table-header-row-filter" style="cursor:default">
                    <input type="text"   id="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['value'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onkeypress'])) {?> onkeypress="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onkeypress'];?>
" <?php }?> style="height:22px" />
                    <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" class="neo-table-action" />
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type']=='combo') {?>
                <div class="neo-table-header-row-filter" style="cursor:default">
                    <select name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['accion']->value['name'];?>
" <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['onchange'])) {?> onchange="<?php echo $_smarty_tpl->tpl_vars['accion']->value['onchange'];?>
" <?php }?>>
                        <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['selected'])) {?>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['accion']->value['arrOptions'],'selected'=>$_smarty_tpl->tpl_vars['accion']->value['selected']),$_smarty_tpl);?>

                        <?php } else { ?>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['accion']->value['arrOptions']),$_smarty_tpl);?>

                        <?php }?>
                    </select>
                    <?php if (!empty($_smarty_tpl->tpl_vars['accion']->value['task'])) {?>
                        <input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['accion']->value['task'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['accion']->value['alt'];?>
" class="neo-table-action" />
                    <?php }?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['accion']->value['type']=='html') {?>
                <div class="neo-table-header-row-filter">
                    <?php echo $_smarty_tpl->tpl_vars['accion']->value['html'];?>

                </div>
            <?php }?>
        <?php } ?>

        <?php if (!empty($_smarty_tpl->tpl_vars['contentFilter']->value)) {?>
            <button type='button' class="neo-table-button-filter-left">
                <?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value==0) {?> <i class='fa fa-filter'></i> <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value) {?> <?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
 <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_SHOW']->value;?>
 <?php }?>
            </button>
            <button type='button' class='neo-table-button-filter-right' id="neo-table-filter-button-arrow">
               <i class='fa fa-caret-down'></i>
            </button>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['enableExport']->value==true) {?>
            <button type="button" class="neo-table-button-filter-left" id="export_button">
                <i class='fa fa-download'></i> <?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_GRID']->value;?>

            </button>
            <button type='button' class='neo-table-button-filter-right' id="neo-table-button-download-right">
               <i class='fa fa-caret-down'></i>
            </button>

            <div id="subMenuExport" class="subMenu neo-display-none" role="menu" aria-haspopup="true" aria-activedescendant="">
                 <div class="items">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportcsv=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="CSV" aria-disabled="false">
			    <div>
				<i style="color:#99c" class="fa fa-file-text-o"></i>&nbsp;&nbsp;CSV
			    </div>
			</div>
		    </a>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportspreadsheet=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="Spread_Sheet" aria-disabled="false">
			    <div>
				<i style="color:green;" class="fa fa-file-excel-o"></i>&nbsp;&nbsp;Spreadsheet
			    </div>
			</div>
		    </a>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&exportpdf=yes&rawmode=yes">
			<div class="menuItem" role="menuitem" id="PDF" aria-disabled="false">
			    <div>
				<i style="color:red;" class="fa fa-file-pdf-o"></i>&nbsp;&nbsp;PDF
			    </div>
			</div>
		    </a>
                </div>
            </div>
        <?php }?>

        <div class="neo-table-header-row-navigation">
            <?php if ($_smarty_tpl->tpl_vars['pagingShow']->value&&$_smarty_tpl->tpl_vars['numPage']->value>1) {?>
                <?php if ($_smarty_tpl->tpl_vars['start']->value<=1) {?>
                    <i class="fa fa-step-backward" style="color:#ccc;"></i>&nbsp;<i class="fa fa-backward" style="color:#ccc"></i>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=start&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-step-backward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
'></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=previous&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-backward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
'></a>
                <?php }?>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['lblPage']->value;?>
&nbsp;
                <input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" size="2" align="absmiddle" name="page" id="pageup" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lblof']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['numPage']->value;?>

                <input type="hidden" value="bypage" name="nav" />
                <?php if ($_smarty_tpl->tpl_vars['end']->value==$_smarty_tpl->tpl_vars['total']->value) {?>
                    <i class="fa fa-forward" style="color:#ccc;"></i>&nbsp;<i class="fa fa-step-forward" style="color:#ccc"></i>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=next&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-forward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
'></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=end&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-step-forward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
'></a>
                <?php }?>
            <?php }?>
        </div>
    </div>

    <?php if (!empty($_smarty_tpl->tpl_vars['contentFilter']->value)) {?>
        <div id="neo-table-header-filterrow" class="neo-display-none">
            <?php echo $_smarty_tpl->tpl_vars['contentFilter']->value;?>

        </div>
    <?php }?>

    <?php if (!empty($_smarty_tpl->tpl_vars['arrFiltersControl']->value)) {?>
        <div class="neo-table-filter-controls">
            <?php  $_smarty_tpl->tpl_vars['filterc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['filterc']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrFiltersControl']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['filterc']->key => $_smarty_tpl->tpl_vars['filterc']->value) {
$_smarty_tpl->tpl_vars['filterc']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['filterc']->key;
?>
                <span class="neo-filter-control"><i><?php echo $_smarty_tpl->tpl_vars['filterc']->value['msg'];?>
</i>&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['filterc']->value['defaultFilter']=='no') {?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&name_delete_filters=<?php echo $_smarty_tpl->tpl_vars['filterc']->value['filters'];?>
" style="color:#ccc;text-decoration:none;"><i class="fa fa-remove"></i></a>
				<?php }?>
				</span>
            <?php } ?>
        </div>
    <?php }?>

    
        <table class="elastix-standard-table" align="center" width="100%" >
        <thead>
            <tr>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['name'] = 'columnNum';
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total']);
?>
                <th><?php echo $_smarty_tpl->tpl_vars['header']->value[$_smarty_tpl->getVariable('smarty')->value['section']['columnNum']['index']]['name'];?>
&nbsp;</th>
                <?php endfor; endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php if ($_smarty_tpl->tpl_vars['numData']->value>0) {?>
                <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['data']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['data']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['data']->key;
 $_smarty_tpl->tpl_vars['data']->iteration++;
 $_smarty_tpl->tpl_vars['data']->last = $_smarty_tpl->tpl_vars['data']->iteration === $_smarty_tpl->tpl_vars['data']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['filas']['last'] = $_smarty_tpl->tpl_vars['data']->last;
?>
                <?php if ($_smarty_tpl->tpl_vars['data']->value['ctrl']=='separator_line') {?>
                    <tr>
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['start']>0) {?>
                            <td colspan="<?php echo $_smarty_tpl->tpl_vars['data']->value['start'];?>
"></td>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars["data_start"])) {$_smarty_tpl->tpl_vars["data_start"] = clone $_smarty_tpl->tpl_vars["data_start"];
$_smarty_tpl->tpl_vars["data_start"]->value = ((string)$_smarty_tpl->tpl_vars['data']->value['start']); $_smarty_tpl->tpl_vars["data_start"]->nocache = null; $_smarty_tpl->tpl_vars["data_start"]->scope = 0;
} else $_smarty_tpl->tpl_vars["data_start"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data']->value['start']), null, 0);?>
                        <td colspan="<?php echo $_smarty_tpl->tpl_vars['numColumns']->value-$_smarty_tpl->tpl_vars['data']->value['start'];?>
" style='background-color:#AAAAAA;height:1px;'></td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['filas']['last']) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['name'] = 'columnNum';
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total']);
?>
                                <td class="table_data_last_row"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['columnNum']['index']]=='') {?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['columnNum']['index']];?>
</td>
                            <?php endfor; endif; ?>
                        <?php } else { ?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['name'] = 'columnNum';
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total']);
?>
                                <td class="table_data"><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['columnNum']['index']]=='') {?>&nbsp;<?php }
echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->getVariable('smarty')->value['section']['columnNum']['index']];?>
</td>
                            <?php endfor; endif; ?>
                        <?php }?>
                    </tr>
                <?php }?>
                <?php } ?>
            <?php } else { ?>
                <tr>
                    <td class="table_data" colspan="<?php echo $_smarty_tpl->tpl_vars['numColumns']->value;?>
" align="center"><?php echo $_smarty_tpl->tpl_vars['NO_DATA_FOUND']->value;?>
</td>
                </tr>
            <?php }?>
        </tbody>
            <?php if ($_smarty_tpl->tpl_vars['numData']->value>3) {?>
        <tfoot>
                <tr>
                    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['name'] = 'columnNum';
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['numColumns']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = (int) 0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] = ((int) 1) == 0 ? 1 : (int) 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['columnNum']['total']);
?>
                    <th><?php echo $_smarty_tpl->tpl_vars['header']->value[$_smarty_tpl->getVariable('smarty')->value['section']['columnNum']['index']]['name'];?>
&nbsp;</th>
                    <?php endfor; endif; ?>
                </tr>
        </tfoot>
            <?php }?>
        </table>
    

    <?php if ($_smarty_tpl->tpl_vars['numData']->value>3&&$_smarty_tpl->tpl_vars['numPage']->value>1) {?>
        <div class="neo-table-footer-row">
            <div class="neo-table-header-row-navigation">
            <?php if ($_smarty_tpl->tpl_vars['pagingShow']->value&&$_smarty_tpl->tpl_vars['numPage']->value>1) {?>
                <?php if ($_smarty_tpl->tpl_vars['start']->value<=1) {?>
                    <i class="fa fa-step-backward" style="color:#ccc;"></i>&nbsp;<i class="fa fa-backward" style="color:#ccc"></i>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=start&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-step-backward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblStart']->value;?>
'></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=previous&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-backward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblPrevious']->value;?>
'></a>
                <?php }?>
                &nbsp;<?php echo $_smarty_tpl->tpl_vars['lblPage']->value;?>
&nbsp;
                <input type="text"  value="<?php echo $_smarty_tpl->tpl_vars['currentPage']->value;?>
" size="2" align="absmiddle" name="page" id="pagedown" />&nbsp;<?php echo $_smarty_tpl->tpl_vars['lblof']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['numPage']->value;?>

                <input type="hidden" value="bypage" name="nav" />
                <?php if ($_smarty_tpl->tpl_vars['end']->value==$_smarty_tpl->tpl_vars['total']->value) {?>
                    <i class="fa fa-forward" style="color:#ccc;"></i>&nbsp;<i class="fa fa-step-forward" style="color:#ccc"></i>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=next&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-forward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblNext']->value;?>
'></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&nav=end&start=<?php echo $_smarty_tpl->tpl_vars['start']->value;?>
" class="fa fa-step-forward neo-navigation-arrow-active" alt='<?php echo $_smarty_tpl->tpl_vars['lblEnd']->value;?>
'></a>
                <?php }?>
            <?php }?>
            </div>
        </div>
    <?php }?>
</form>


<?php echo '<script'; ?>
 type="text/Javascript">
$(document).ready(function() {
    // Sincronizar los dos cuadros de texto de navegación al escribir
    $("[id^=page]").keyup(function(event) {
        var id  = $(this).attr("id");
        var val = $(this).val();

        if(id == "pageup")
            $("#pagedown").val(val);
        else if(id == "pagedown")
            $("#pageup").val(val);
    });

    $("#neo-table-filter-button-arrow").click(function() {

    <?php if ($_smarty_tpl->tpl_vars['AS_OPTION']->value) {?>
        var filter_show = "<?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
";
        var filter_hide = "<?php echo $_smarty_tpl->tpl_vars['MORE_OPTIONS']->value;?>
";
    <?php } else { ?>
        var filter_show = "<?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_SHOW']->value;?>
";
        var filter_hide = "<?php echo $_smarty_tpl->tpl_vars['FILTER_GRID_HIDE']->value;?>
";
    <?php }?>


        if($("#neo-table-header-filterrow").data("neo-table-header-filterrow-status")=="visible") {
            $("#neo-table-header-filterrow").addClass("neo-display-none");
            $("#neo-table-label-filter").text(filter_show);
            $("#neo-table-filter-button-arrow i").removeClass("fa-caret-up");
            $("#neo-table-filter-button-arrow i").addClass("fa-caret-down");
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "hidden");
        } else {
            $("#neo-table-header-filterrow").removeClass("neo-display-none");
            $("#neo-table-label-filter").text(filter_hide);
            $("#neo-table-filter-button-arrow i").removeClass("fa-caret-down");
            $("#neo-table-filter-button-arrow i").addClass("fa-caret-up");
            $("#neo-table-header-filterrow").data("neo-table-header-filterrow-status", "visible");
        }
    });

    $('form.elastix-standard-formgrid>table.elastix-standard-table').each(function() {
        var wt = $(this).find('thead>tr').width();
        $(this).find('thead>tr>th').each(function () {
            var wc = $(this).width();
            var pc = 100.0 * wc / wt;
            $(this).width(pc + "%");
        });
        $(this).colResizable({
            liveDrag:   true,
            marginLeft: "0px"
        });
    });
});
<?php echo '</script'; ?>
>

<?php }} ?>
