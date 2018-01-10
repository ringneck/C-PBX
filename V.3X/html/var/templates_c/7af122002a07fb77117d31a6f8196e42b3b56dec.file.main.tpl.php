<?php /* Smarty version Smarty-3.1.21, created on 2017-12-22 01:21:30
         compiled from "/var/www/html/modules/pbxadmin/themes/default/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6978237615a213104131491-76281354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7af122002a07fb77117d31a6f8196e42b3b56dec' => 
    array (
      0 => '/var/www/html/modules/pbxadmin/themes/default/main.tpl',
      1 => 1513863243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6978237615a213104131491-76281354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a21310420a932_06532117',
  'variables' => 
  array (
    'Basic' => 0,
    'Extensions' => 0,
    'Feature_Codes' => 0,
    'Outbound_Routes' => 0,
    'Trunks' => 0,
    'Inbound_Call_Control' => 0,
    'Inbound_Routes' => 0,
    'DAHDI_Channel_DIDs' => 0,
    'Announcements' => 0,
    'Blacklist' => 0,
    'CallerID_Lookup_Sources' => 0,
    'Call_Flow_Control' => 0,
    'Follow_Me' => 0,
    'IVR' => 0,
    'Queue_Priorities' => 0,
    'Queues' => 0,
    'Ring_Groups' => 0,
    'Time_Conditions' => 0,
    'Time_Groups' => 0,
    'Internal_Options_Configuration' => 0,
    'Conferences' => 0,
    'Languages' => 0,
    'Misc_Applications' => 0,
    'Misc_Destinations' => 0,
    'Music_on_Hold' => 0,
    'PIN_Sets' => 0,
    'Paging_Intercom' => 0,
    'Parking_Lot' => 0,
    'System_Recordings' => 0,
    'VoiceMail_Blasting' => 0,
    'Remote_Access' => 0,
    'Callback' => 0,
    'DISA' => 0,
    'Option' => 0,
    'Unembedded_freePBX' => 0,
    'INFO' => 0,
    'htmlFPBX' => 0,
    'footer_FreePBX' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a21310420a932_06532117')) {function content_5a21310420a932_06532117($_smarty_tpl) {?><table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr>
    <td valign="top" width="220">
      <div id="nav">
        <div id="nav-setup" class="tabs-container">
          <ul>
            <li class="category category-header"><?php echo $_smarty_tpl->tpl_vars['Basic']->value;?>
</li>
            <li><a class="current" href="/?menu=pbxconfig&amp;type=setup&amp;display=extensions"  ><?php echo $_smarty_tpl->tpl_vars['Extensions']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=featurecodeadmin"  ><?php echo $_smarty_tpl->tpl_vars['Feature_Codes']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=routing"  ><?php echo $_smarty_tpl->tpl_vars['Outbound_Routes']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=trunks"  ><?php echo $_smarty_tpl->tpl_vars['Trunks']->value;?>
</a></li>
            <li><?php echo $_smarty_tpl->tpl_vars['Inbound_Call_Control']->value;?>
</li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=did"  ><?php echo $_smarty_tpl->tpl_vars['Inbound_Routes']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=dahdichandids"  ><?php echo $_smarty_tpl->tpl_vars['DAHDI_Channel_DIDs']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=announcement"  ><?php echo $_smarty_tpl->tpl_vars['Announcements']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=blacklist"  ><?php echo $_smarty_tpl->tpl_vars['Blacklist']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=cidlookup"  ><?php echo $_smarty_tpl->tpl_vars['CallerID_Lookup_Sources']->value;?>
</a></li>
            <!--<li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=daynight"  ><?php echo $_smarty_tpl->tpl_vars['Call_Flow_Control']->value;?>
</a></li>-->
            <!--<li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=findmefollow"  ><?php echo $_smarty_tpl->tpl_vars['Follow_Me']->value;?>
</a></li>-->
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=ivr"  ><?php echo $_smarty_tpl->tpl_vars['IVR']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=queueprio"  ><?php echo $_smarty_tpl->tpl_vars['Queue_Priorities']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=queues"  ><?php echo $_smarty_tpl->tpl_vars['Queues']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=ringgroups"  ><?php echo $_smarty_tpl->tpl_vars['Ring_Groups']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=timeconditions"  ><?php echo $_smarty_tpl->tpl_vars['Time_Conditions']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=timegroups"  ><?php echo $_smarty_tpl->tpl_vars['Time_Groups']->value;?>
</a></li>
            <li><?php echo $_smarty_tpl->tpl_vars['Internal_Options_Configuration']->value;?>
</li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=conferences"  ><?php echo $_smarty_tpl->tpl_vars['Conferences']->value;?>
</a></li>
            <!--<li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=languages"  ><?php echo $_smarty_tpl->tpl_vars['Languages']->value;?>
</a></li>-->
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=miscapps"  ><?php echo $_smarty_tpl->tpl_vars['Misc_Applications']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=miscdests"  ><?php echo $_smarty_tpl->tpl_vars['Misc_Destinations']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=music"  ><?php echo $_smarty_tpl->tpl_vars['Music_on_Hold']->value;?>
</a></li>
            <!--<li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=pinsets"  ><?php echo $_smarty_tpl->tpl_vars['PIN_Sets']->value;?>
</a></li>-->
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=paging"  ><?php echo $_smarty_tpl->tpl_vars['Paging_Intercom']->value;?>
</a></li>
            <!--<li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=parking"  ><?php echo $_smarty_tpl->tpl_vars['Parking_Lot']->value;?>
</a></li>-->
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=recordings"  ><?php echo $_smarty_tpl->tpl_vars['System_Recordings']->value;?>
</a></li>
            <!--<li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=vmblast"  ><?php echo $_smarty_tpl->tpl_vars['VoiceMail_Blasting']->value;?>
</a></li>-->
            <!--<li><?php echo $_smarty_tpl->tpl_vars['Remote_Access']->value;?>
</li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=callback"  ><?php echo $_smarty_tpl->tpl_vars['Callback']->value;?>
</a></li>
            <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=disa"  ><?php echo $_smarty_tpl->tpl_vars['DISA']->value;?>
</a></li>-->
            <!--<li><?php echo $_smarty_tpl->tpl_vars['Option']->value;?>
</li>-->
            <!--<li style="float:left;border-right:0px"><a href="/admin/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['Unembedded_freePBX']->value;?>
</a></li>-->
            <!--<div style="height:0px">
                <a href="#" class="info"><span style='margin-left:0.2cm; margin-top:-1.8cm; width:303px'><?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</span></a>
            </div>-->

          </ul>
        </div>
      </div>
      <br /> <br /> <br /> <br />
    </td>
    <td id="content_pbx" valign="top"><?php echo $_smarty_tpl->tpl_vars['htmlFPBX']->value;?>
</td>
  </tr>
  <tr>
    <td></td>
    <td valign="bottom">
      <div align="center">
        <a href="http://www.freepbx.org" target="_blank" style="color: #444; text-decoration: none;">FreePBX®</a>
        <a style="color: #444; text-decoration: none;"><?php echo $_smarty_tpl->tpl_vars['footer_FreePBX']->value;?>
</a>
        <a href="http://www.schmoozecom.com/" target="_blank" style="color: #444; text-decoration: none;">Schmooze Com, Inc.</a>
      </div>
    </td>
  </tr>
</table>
<?php }} ?>
