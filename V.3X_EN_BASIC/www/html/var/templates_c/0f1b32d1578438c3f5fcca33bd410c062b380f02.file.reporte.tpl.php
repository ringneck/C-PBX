<?php /* Smarty version Smarty-3.1.21, created on 2017-01-04 00:22:44
         compiled from "/var/www/html/modules/control_panel/themes/default/reporte.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19566982125867411da23734-54340946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f1b32d1578438c3f5fcca33bd410c062b380f02' => 
    array (
      0 => '/var/www/html/modules/control_panel/themes/default/reporte.tpl',
      1 => 1483162180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19566982125867411da23734-54340946',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5867411daa93d3_22576970',
  'variables' => 
  array (
    'AREA_DESCR_EXTENSION' => 0,
    'module_name' => 0,
    'AREA_DESCR_TRUNKS' => 0,
    'AREA_DESCR_TRUNKSSIP' => 0,
    'LBL_NEW' => 0,
    'LBL_OLD' => 0,
    'LBL_QUEUE_MEMBERS' => 0,
    'LBL_QUEUE_NO_MEMBERS' => 0,
    'LBL_QUEUE_CALLERS' => 0,
    'LBL_QUEUE_NO_CALLERS' => 0,
    'LBL_CONF_PARTICIPANTS' => 0,
    'LBL_PARKED' => 0,
    'LBL_SAVE_NAME' => 0,
    'LBL_EDIT_NAME' => 0,
    'ARRLANG_MAIN' => 0,
    'VAR_INIT' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5867411daa93d3_22576970')) {function content_5867411daa93d3_22576970($_smarty_tpl) {?><div id="controlPanelApplication">

<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="desktop">
<div style="float: left">
<div class="statusbar">
<!-- TODO: i18n -->

{{#if connected}}
<span style="color: green; font-weight: bold;">Connected</span>
{{else}}
<span style="color: red; font-weight: bold;">Connecting...</span>
{{/if}}

</div>

{{#view App.BaseSortableView }}



{{#view App.PBXPanelView controllerBinding="extensions" }}
	<?php echo $_smarty_tpl->tpl_vars['AREA_DESCR_EXTENSION']->value;?>

	{{#if finishedloading}}
	{{#view App.SortablePanelView }}
		{{#each }}
		{{view App.ExtensionView }}
		{{else}}
		<br/>
		{{/each}}
	{{/view}}
	{{else}}
	<img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
	{{/if}}
{{/view}}




{{#view App.PBXPanelView controllerBinding="dahdi" }}
    <?php echo $_smarty_tpl->tpl_vars['AREA_DESCR_TRUNKS']->value;?>

    {{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.DAHDISpanView }}
		{{else}}
		<br/>
		{{/each}}
    </div>
    {{else}}
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
    {{/if}}
{{/view}}




{{#view App.PBXPanelView controllerBinding="iptrunks" }}
	<?php echo $_smarty_tpl->tpl_vars['AREA_DESCR_TRUNKSSIP']->value;?>

	{{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.IPTrunkView }}
		{{else}}
		<br/>
		{{/each}}
	</div>
    {{else}}
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
    {{/if}}
{{/view}}


{{/view}}
</div>


{{#view App.FAQView }}
{{#view App.BaseSortableView }}



{{#view App.PBXPanelView controllerBinding="area1" }}
	{{view App.EditableTitleView }}
	<dd>
	{{#if finishedloading}}
	{{#view App.SortablePanelView }}
		{{#each }}
		{{view App.ExtensionView}}
		{{else}}
		<br/>
		{{/each}}
	{{/view}}
    {{else}}
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}




{{#view App.PBXPanelView controllerBinding="area2" }}
	{{view App.EditableTitleView }}
	<dd>
	{{#if finishedloading}}
	{{#view App.SortablePanelView }}
		{{#each }}
		{{view App.ExtensionView}}
		{{else}}
		<br/>
		{{/each}}
	{{/view}}
    {{else}}
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}




{{#view App.PBXPanelView controllerBinding="area3" }}
	{{view App.EditableTitleView }}
	<dd>
	{{#if finishedloading}}
	{{#view App.SortablePanelView }}
		{{#each }}
		{{view App.ExtensionView}}
		{{else}}
		<br/>
		{{/each}}
	{{/view}}
    {{else}}
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}




{{#view App.PBXPanelView controllerBinding="conferences" }}
	<dt>{{description}}</dt>
	<dd>
	{{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.ConferenceView}}
		{{else}}
		<br/>
		{{/each}}
	</div>
    {{else}}
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}




{{#view App.PBXPanelView controllerBinding="parkinglots" }}
	<dt>{{description}}</dt>
	<dd>
	{{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.ParkinglotView}}
		{{else}}
		<br/>
		{{/each}}
	</div>
    {{else}}
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}




{{#view App.PBXPanelView controllerBinding="queues" }}
	<dt>{{description}}</dt>
	<dd>
	{{#if finishedloading}}
	<div>
		{{#each }}
		{{view App.QueueView}}
		{{else}}
		<br/>
		{{/each}}
	</div>
    {{else}}
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/loading.gif"/>
    {{/if}}
	</dd>
{{/view}}


{{/view }} 
{{/view}} 
<?php echo '</script'; ?>
><!-- data-template-name="desktop"  -->

<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="extension">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
	<div>
		
		{{extension}}: {{channel}} - {{description}} {{#if registered}}({{ip}}){{/if}}<br/>
		{{#if active }}
		<ul>
	    {{#each active}}
	    <li>{{formatSince}}: {{remoteExten}}</li>
	    {{/each}}
	    </ul>
	    {{/if}}
		
	</div>
	</a>
</div>
<div style="float:left; width:115px; text-align:left; padding-left:4px;">
	
	<b>{{extension}}:</b> {{view.truncatedDescription}}<br/>
	{{#each active}}
	<span class="monitor">{{formatSince}}: {{remoteExten}}</span><br/>
	{{/each}}
	
</div>

<div style="float: right; border: black solid 0px;">
	{{view App.DraggablePhoneIconView iconBinding="view.extensionIcon" }}
</div>
{{#if unreadMail }}
<div style="float: right; border: black solid 0px;">
	<a class="pbxtooltip" href="#" {{action "dialvoicemail" this on="doubleClick"}}>
		<img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/mail.png"/>
		<div><?php echo $_smarty_tpl->tpl_vars['LBL_NEW']->value;?>
: {{NewMessages}}, <?php echo $_smarty_tpl->tpl_vars['LBL_OLD']->value;?>
: {{OldMessages}}</div>
    </a>
</div>
{{/if}}

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="iptrunk">
<div style="float:left; border: black solid 0px;">
    <a class="pbxtooltip" href="#">
    <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
    <div>
        
        {{channel}} {{#if registered}}({{ip}}){{/if}}<br/>
        {{#if active}}
        <ul>
	    {{#each active}}
	    <li>{{formatSince}}: {{CallerIDNum}}</li>
	    {{/each}}
	    </ul>
	    {{/if}}
        
    </div>
    </a>
</div>
<div style="float:left; width:115px; text-align:left; padding-left:4px;">
    
    <b>{{view.truncatedDescription}}</b><br/>
    {{#each active}}
    <span class="monitor">{{formatSince}}: {{CallerIDNum}}</span><br/>
    {{/each}}
    
</div>

<div style="float: right; border: black solid 0px;">
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/icon_trunk2.png"/>
</div>

<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="dahdispan">
<div style="float:left; border: black solid 0px;">
    <a class="pbxtooltip" href="#">
    <img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
    <div>
        
        DAHDI/{{span}}: {{formatChanRange}}<br/>

        <!-- Mostrar los números de los canales en la alarma -->
        {{#each chan}}<span {{bindAttr style="alarmstyle"}}>{{chan}}</span>{{/each}}
        
        <!-- Mostrar las llamadas activas no clasificadas en un canal canal -->
        {{#if active}}
        <ul>
        {{#each active}}
        <li>{{formatSince}}: {{CallerIDNum}}</li>
        {{/each}}
        </ul>
        {{/if}}

        <!-- Mostrar las llamadas activas en cada canal -->
        <ul>
        {{#each chan}}
            {{#if active }}
	            <li>{{chan}}:
	            {{#each active}}
	                {{formatSince}}: {{CallerIDNum}}
	            {{else}}
	                (idle)
	            {{/each}}
	            </li>
            {{/if}}
        {{/each}}
        </ul>
        
    </div>
    </a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
    
    <b>DAHDI/{{span}}:</b> {{formatChanRange}}<br/>
    
</div>
<div style="float: right; border: black solid 0px;">
    <img class="icon" src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/icon_trunk2.png"/>
</div>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="queue">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
	<div>
		
		{{extension}}: {{description}}<br/>
		{{#if members}}
		<?php echo $_smarty_tpl->tpl_vars['LBL_QUEUE_MEMBERS']->value;?>
:<br/>
		<ul>
		{{#each members}}<li>{{shortchannel}}</li>{{/each}}
		</ul>
		{{else}}
		<?php echo $_smarty_tpl->tpl_vars['LBL_QUEUE_NO_MEMBERS']->value;?>

		{{/if}}
		<br/>
		{{#if callers}}
		<?php echo $_smarty_tpl->tpl_vars['LBL_QUEUE_CALLERS']->value;?>
:<br/>
		<ul>
		{{#each callers}}
		<li>{{CallerIDName}} &lt;{{CallerIDNum}}&gt;</li>
		{{/each}}
		</ul>
		{{else}}
		<?php echo $_smarty_tpl->tpl_vars['LBL_QUEUE_NO_CALLERS']->value;?>

		{{/if}}
		
	</div>
	</a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
	
	<b>{{extension}}:</b> {{view.truncatedDescription}}<br/>
	{{#if callers }}
	<span class="monitor">{{callers.length}}</span><br/>
	{{/if}}
	
</div>
<div style="float: right; border: black solid 0px;">
    {{view App.DroppableIconView icon="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/queue.png" }}
</div>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="conference">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
	<div>
		
		{{extension}}: {{description}}<br/>
		{{#if callers}}
		<?php echo $_smarty_tpl->tpl_vars['LBL_QUEUE_CALLERS']->value;?>
:<br/>
		<ul>
		{{#each callers}}
		<li>{{CallerIDName}} &lt;{{CallerIDNum}}&gt;</li>
		{{/each}}
		</ul>
		{{else}}
		<?php echo $_smarty_tpl->tpl_vars['LBL_QUEUE_NO_CALLERS']->value;?>

		{{/if}}
		
	</div>
	</a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
	
	<b>{{extension}}:</b> {{view.truncatedDescription}}<br/>
	{{#if callers }}
	<span class="monitor"><?php echo $_smarty_tpl->tpl_vars['LBL_CONF_PARTICIPANTS']->value;?>
: {{callers.length}} - {{formatSince}}</span><br/>
	{{/if}}
	
</div>
<div style="float: right; border: black solid 0px;">
    {{view App.DroppableIconView icon="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/conference.png" }}
</div>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="parkinglot">
<div style="float:left; border: black solid 0px;">
	<a class="pbxtooltip" href="#">
	<img src="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/info.png"/>
	<div>
		
		{{extension}}
		
	</div>
	</a>
</div>
<div style="float:left; width:135px; text-align:left; padding-left:4px;">
	
	<b><?php echo $_smarty_tpl->tpl_vars['LBL_PARKED']->value;?>
 ({{extension}})</b><br/>
	{{#if shortchannel }}
	<span class="monitor">{{shortchannel}}: {{formatTimeout}}</span><br/>
	{{/if}}
	
</div>
<div style="float: right; border: black solid 0px;">
	{{view App.DroppableIconView icon="modules/<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
/images/parking.png" }}
</div>
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/x-handlebars" data-template-name="editable-title">

{{#if editing }}
{{view Ember.TextField valueBinding="description" }}
<button {{action "save" bubbles=false }}><?php echo $_smarty_tpl->tpl_vars['LBL_SAVE_NAME']->value;?>
</button>
{{else}}
{{description}} -- {{length}} ext
<span class="paneledittitle" {{action "edit" bubbles=false }}>[<?php echo $_smarty_tpl->tpl_vars['LBL_EDIT_NAME']->value;?>
]</span>
{{/if}}

<?php echo '</script'; ?>
>

</div>
<?php echo '<script'; ?>
 type="text/javascript">
var arrLang_main = <?php echo $_smarty_tpl->tpl_vars['ARRLANG_MAIN']->value;?>
;
var var_init = <?php echo $_smarty_tpl->tpl_vars['VAR_INIT']->value;?>

<?php echo '</script'; ?>
>
<?php }} ?>
