<?php /* Smarty version Smarty-3.1.21, created on 2017-12-21 22:55:14
         compiled from "/var/www/html/themes/tenant/_common/_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5692997905a2130f68a8103-84321437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0fb9e76b11f831404f26b05aeb3463c5750e44a' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/_menu.tpl',
      1 => 1513863250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5692997905a2130f68a8103-84321437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a2130f69aa4a9_18666671',
  'variables' => 
  array (
    'lblRegisterCm' => 0,
    'lblRegisteredCm' => 0,
    'MENU_COLOR' => 0,
    'SEND_REQUEST' => 0,
    'ADD_BOOKMARK' => 0,
    'REMOVE_BOOKMARK' => 0,
    'ADDING_BOOKMARK' => 0,
    'REMOVING_BOOKMARK' => 0,
    'HIDE_IZQTAB' => 0,
    'SHOW_IZQTAB' => 0,
    'HIDING_IZQTAB' => 0,
    'SHOWING_IZQTAB' => 0,
    'AMOUNT_CHARACTERS' => 0,
    'MSG_SAVE_NOTE' => 0,
    'MSG_GET_NOTE' => 0,
    'THEMENAME' => 0,
    'LBL_NO_STICKY' => 0,
    'WEBPATH' => 0,
    'MODULES_SEARCH' => 0,
    'arrMainMenu' => 0,
    'idMenu' => 0,
    'idMainMenuSelected' => 0,
    'menu' => 0,
    'idSubMenu' => 0,
    'idSubMenuSelected' => 0,
    'subMenu' => 0,
    'idSubMenu2' => 0,
    'subMenu2' => 0,
    'SHORTCUT' => 0,
    'USER_ID' => 0,
    'USER_LOGIN' => 0,
    'CHANGE_PASSWORD' => 0,
    'LOGOUT' => 0,
    'Registered' => 0,
    'VersionDetails' => 0,
    'ABOUT_ELASTIX2' => 0,
    'NOTIFICATIONS' => 0,
    'NOTI' => 0,
    'BREADCRUMB' => 0,
    'value' => 0,
    'idSubMenu2Selected' => 0,
    'nameSubMenu2Selected' => 0,
    'nameSubMenuSelected' => 0,
    'WEBCOMMON' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2130f69aa4a9_18666671')) {function content_5a2130f69aa4a9_18666671($_smarty_tpl) {?>
<?php echo '<script'; ?>
 type='text/javascript'>
var themeName='elastixneo'; //nombre del tema
$(document).ready(function(){
    $("#togglebookmark").click(function() {
        var imgBookmark = $("#togglebookmark").attr('src');
        if(/bookmarkon.png/.test(imgBookmark)) {
            $("#togglebookmark").attr('src',"web/themes/"+themeName+"/images/bookmark.png");
        } else {
            $("#togglebookmark").attr('src',"web/themes/"+themeName+"/images/bookmarkon.png");
        }
    });



    $("#export_button").hover(
      function () {
          $(this).addClass("exportBorder");
      },
      function () {
          $(this).removeClass("exportBorder");
          $(this).attr("aria-expanded","false");
          $(this).removeClass("exportBackground");
          $(".letranodec").css("color","#444444");
          $("#subMenuExport").addClass("neo-display-none");
      }
    );
    $("#neo-table-button-download-right").click(
      function () {
          if($(this).attr("aria-expanded") == "false"){
          var exportPosition = $('#export_button').position();
          var top = exportPosition.top + 41;
          var left = exportPosition.left - 3;
          $("#subMenuExport").css('top',top+"px");
          $("#subMenuExport").css('left',left+"px");
          $(this).attr("aria-expanded","true");
          $(this).addClass("exportBackground");
          $(".letranodec").css("color","#FFFFFF");
          $("#subMenuExport").removeClass("neo-display-none");
          }
          else{
          $(".letranodec").css("color","#444444");
          $("#subMenuExport").addClass("neo-display-none");
          $(this).removeClass("exportBackground");
          $(this).attr("aria-expanded","false");
          }
      }
    );

    $("#subMenuExport").hover(
      function () {
        $(this).removeClass("neo-display-none");
        $(".letranodec").css("color","#FFFFFF");
        $("#export_button").attr("aria-expanded","true");
        $("#export_button").addClass("exportBackground");
      },
      function () {
        $(this).addClass("neo-display-none");
        $(".letranodec").css("color","#444444");
        $("#export_button").removeClass("exportBackground");
        $("#export_button").attr("aria-expanded","false");
      }
    );
});

function removeNeoDisplayOnMouseOut(ref){
    $(ref).find('div').addClass('neo-display-none');
}

function removeNeoDisplayOnMouseOver(ref){
    $(ref).find('div').removeClass('neo-display-none');
}
<?php echo '</script'; ?>
>


<input type="hidden" id="lblRegisterCm"   value="<?php echo $_smarty_tpl->tpl_vars['lblRegisterCm']->value;?>
" />
<input type="hidden" id="lblRegisteredCm" value="<?php echo $_smarty_tpl->tpl_vars['lblRegisteredCm']->value;?>
" />
<input type="hidden" id="userMenuColor" value="<?php echo $_smarty_tpl->tpl_vars['MENU_COLOR']->value;?>
" />
<input type="hidden" id="lblSending_request" value="<?php echo $_smarty_tpl->tpl_vars['SEND_REQUEST']->value;?>
" />
<input type="hidden" id="toolTip_addBookmark" value="<?php echo $_smarty_tpl->tpl_vars['ADD_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_removeBookmark" value="<?php echo $_smarty_tpl->tpl_vars['REMOVE_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_addingBookmark" value="<?php echo $_smarty_tpl->tpl_vars['ADDING_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_removingBookmark" value="<?php echo $_smarty_tpl->tpl_vars['REMOVING_BOOKMARK']->value;?>
" />
<input type="hidden" id="toolTip_hideTab" value="<?php echo $_smarty_tpl->tpl_vars['HIDE_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_showTab" value="<?php echo $_smarty_tpl->tpl_vars['SHOW_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_hidingTab" value="<?php echo $_smarty_tpl->tpl_vars['HIDING_IZQTAB']->value;?>
" />
<input type="hidden" id="toolTip_showingTab" value="<?php echo $_smarty_tpl->tpl_vars['SHOWING_IZQTAB']->value;?>
" />
<input type="hidden" id="amount_char_label" value="<?php echo $_smarty_tpl->tpl_vars['AMOUNT_CHARACTERS']->value;?>
" />
<input type="hidden" id="save_note_label" value="<?php echo $_smarty_tpl->tpl_vars['MSG_SAVE_NOTE']->value;?>
" />
<input type="hidden" id="get_note_label" value="<?php echo $_smarty_tpl->tpl_vars['MSG_GET_NOTE']->value;?>
" />
<input type="hidden" id="elastix_theme_name" value="<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
" />
<input type="hidden" id="lbl_no_description" value="<?php echo $_smarty_tpl->tpl_vars['LBL_NO_STICKY']->value;?>
" />

<!-- inicio del menú tipo acordeon-->
<div class="sidebar-menu">
    <header class="logo-env">
        <!-- logo -->
        <div class="logo">
            <a href="index.php">
                <img src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/olssoo_logo_mini2.png" width="62" hight="43"  alt="" />
            </a>
        </div>
        <!-- logo collapse icon -->
        <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
            </a>
        </div>
        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- Search Bar -->
        <li id="search">
            <form method="get" action="">
                <input type="text" id="search_module_elastix" name="search_module_elastix" class="search-input" placeholder="<?php echo $_smarty_tpl->tpl_vars['MODULES_SEARCH']->value;?>
"/>
                <button type="submit">
                    <i class="entypo-search"></i>
                </button>
            </form>
        </li>
        <!--recorremos el arreglo del menu nivel primario-->
        <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_smarty_tpl->tpl_vars['idMenu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arrMainMenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['idMenu']->value = $_smarty_tpl->tpl_vars['menu']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['idMenu']->value==$_smarty_tpl->tpl_vars['idMainMenuSelected']->value) {?>
                <li class="active opened active">
            <?php } else { ?>
                <li>
            <?php }?>
                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idMenu']->value;?>
">
                         <i class="<?php echo $_smarty_tpl->tpl_vars['menu']->value['icon'];?>
"></i>
			<!--<span><?php echo $_smarty_tpl->tpl_vars['idMenu']->value;?>
</span>-->
                        <!--<span><?php echo $_smarty_tpl->tpl_vars['menu']->value['description'];?>
</span>-->
			<span><?php echo $_smarty_tpl->tpl_vars['menu']->value['Name'];?>
</span>
                    </a>
                    <ul>
                        <!--recorremos el arreglo del menu nivel secundario-->
                        <?php  $_smarty_tpl->tpl_vars['subMenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subMenu']->_loop = false;
 $_smarty_tpl->tpl_vars['idSubMenu'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subMenu']->key => $_smarty_tpl->tpl_vars['subMenu']->value) {
$_smarty_tpl->tpl_vars['subMenu']->_loop = true;
 $_smarty_tpl->tpl_vars['idSubMenu']->value = $_smarty_tpl->tpl_vars['subMenu']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['idSubMenu']->value==$_smarty_tpl->tpl_vars['idSubMenuSelected']->value) {?>
                                <li class="active opened active">
                            <?php } else { ?>
                                <li>
                            <?php }?>
                                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idSubMenu']->value;?>
">
					<i class="<?php echo $_smarty_tpl->tpl_vars['subMenu']->value['icon'];?>
"></i>
					<!--<span><?php echo $_smarty_tpl->tpl_vars['idSubMenu']->value;?>
</span>-->
                                        <!--<span><?php echo $_smarty_tpl->tpl_vars['subMenu']->value['description'];?>
</span>-->
					<span><?php echo $_smarty_tpl->tpl_vars['subMenu']->value['Name'];?>
</span>
                                    </a>
                                    <?php if ($_smarty_tpl->tpl_vars['subMenu']->value['children']) {?>
                                        <ul>
                                            <!--recorremos el arreglo del menu de tercer nivel-->
                                            <?php  $_smarty_tpl->tpl_vars['subMenu2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subMenu2']->_loop = false;
 $_smarty_tpl->tpl_vars['idSubMenu2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['subMenu']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subMenu2']->key => $_smarty_tpl->tpl_vars['subMenu2']->value) {
$_smarty_tpl->tpl_vars['subMenu2']->_loop = true;
 $_smarty_tpl->tpl_vars['idSubMenu2']->value = $_smarty_tpl->tpl_vars['subMenu2']->key;
?>
                                                <li>
                                                    <a href="index.php?menu=<?php echo $_smarty_tpl->tpl_vars['idSubMenu2']->value;?>
">
							<!--<span><?php echo $_smarty_tpl->tpl_vars['idSubMenu2']->value;?>
</span>-->
                                                        <!--<span><?php echo $_smarty_tpl->tpl_vars['subMenu2']->value['description'];?>
</span>-->
							<span><?php echo $_smarty_tpl->tpl_vars['subMenu2']->value['Name'];?>
</span>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php }?>
                                </li>
                        <?php } ?>
                    </ul>
                </li>
        <?php } ?>

        <?php echo $_smarty_tpl->tpl_vars['SHORTCUT']->value;?>


    </ul>
</div>
<!-- fin del menú tipo acordeon-->

<!-- inicio del head principal-->
<div style="height:72px;background-color:#efefef;padding:15px;">
    <!-- Profile Info and Notifications -->
    <span style='float:right; text-align:right; padding:0px 5px 0px 0px; width:175px;' class="col-md-6 col-sm-8 clearfix">
        <ul style='float:right;' class="user-info pull-none-xsm">
            <!-- Profile Info -->
            <li class="profile-info dropdown pull-right"><!-- add class "pull-right" if you want to place this from right -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!--<img  style="border:0px" src="index.php?menu=_elastixutils&action=getImage&ID=<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
&rawmode=yes" alt="" class="img-circle" width="44" />-->
            <img  style="border:0px" src="/themes/tenant/images/Icon-user.png" alt="" class="img-circle" width="44" />
                    <?php echo $_smarty_tpl->tpl_vars['USER_LOGIN']->value;?>

                </a>
                <!-- Reverse Caret -->
                <i style='font-size:15px;font-weight:bold;' class="fa fa-angle-down"></i>
                <!-- Profile sub-links -->
                <ul class="dropdown-menu">

                    <!-- Reverse Caret -->
                    <li class="caret"></li>

                    <!-- Profile sub-links -->
                    <li class="dropdown">
                        <a href="#" class="setadminpassword">
                            <i class="fa fa-user"></i>
                            <?php echo $_smarty_tpl->tpl_vars['CHANGE_PASSWORD']->value;?>

                        </a>
                    </li>
                    <li class="dropdown">
                        <a  href="index.php?logout=yes" >
                            <i class="fa fa-sign-out"></i>
                            <?php echo $_smarty_tpl->tpl_vars['LOGOUT']->value;?>

                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </span>

    <!-- Raw Links -->
    <span style='float:right; width:400px;'>
        <ul style="padding-top:12px;" class="list-inline links-list pull-right neo-topbar-notification">

        <li id="header_notification_bar" class="profile-info dropdown">
            <a data-toggle="dropdown" class="" href="#">
                <i class="fa fa-external-link"></i>
            </a>
            <ul class="dropdown-menu">

                <!-- Reverse Caret -->
                <li class="caret"></li>

                <!-- Profile sub-links -->
                <!--<li><a href="#" class="register_link"><?php echo $_smarty_tpl->tpl_vars['Registered']->value;?>
</a></li>
                <li><a href="#" index.php?menu=control_panel"><i class="fa fa-cube"></i><?php echo $_smarty_tpl->tpl_vars['VersionDetails']->value;?>
</a></li>-->
                <li><a href="http://www.olssoo.com" target="_blank"><i class="fa fa-external-link"></i>OLSSOO FACTORY</a></li>
                <!--<li><a href="#/admin" target="_blank"><i class="fa fa-external-link"></i>D-PBX CORE</a></li>-->
                <!--<li><a href="#" id="dialogaboutelastix"><i class="fa fa-info-circle"></i><?php echo $_smarty_tpl->tpl_vars['ABOUT_ELASTIX2']->value;?>
</a></li>-->
            </ul>
        </li>

        <!--li id="header_notification_bar" class="dropdown">
            <a  class="" href="index.php?menu=addons">
                <i class="fa fa-cubes"></i>
            </a>
        </li-->

        <!-- notification dropdown start-->
        <!--li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="" href="#">
                <i class="fa fa-heartbeat"></i>
            </a>
        </li-->
        <!-- notification dropdown end -->
        <li id="header_notification_bar" class="profile-info dropdown pull-right notifications" style="float: none !important;">
            <a data-toggle="dropdown" class="" href="#">
                <i class="fa fa-bell-o"></i>
            </a>
            <ul class="dropdown-menu">

                <!-- Reverse Caret -->
                <li class="caret"></li>

                        <li><p><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['LBL_NOTIFICATION_SYSTEM'];?>
</p></li>
                <li>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['NOTI'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NOTI']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['NOTIFICATIONS_PUBLIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NOTI']->key => $_smarty_tpl->tpl_vars['NOTI']->value) {
$_smarty_tpl->tpl_vars['NOTI']->_loop = true;
?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="info") {?>notification-info<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="warning") {?>notification-warning<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="error") {?>notification-danger<?php }?>">
                                <a href="#"><i class="<?php if ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="info") {?>fa fa-info<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="warning") {?>fa fa-warning<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="error") {?>fa fa-ban<?php }?>"></i><?php echo $_smarty_tpl->tpl_vars['NOTI']->value['content'];?>
</a>
                            </li>
                        <?php }
if (!$_smarty_tpl->tpl_vars['NOTI']->_loop) {
?>
                            <li><p><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['TXT_NO_NOTIFICATIONS'];?>
</p></li>
                        <?php } ?>
                    </ul>
                </li>
                        <li><p><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['LBL_NOTIFICATION_USER'];?>
</p></li>
                <li>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['NOTI'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NOTI']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['NOTIFICATIONS_PRIVATE']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NOTI']->key => $_smarty_tpl->tpl_vars['NOTI']->value) {
$_smarty_tpl->tpl_vars['NOTI']->_loop = true;
?>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="info") {?>notification-info<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="warning") {?>notification-warning<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="error") {?>notification-danger<?php }?>">
                                <a href="#"><i class="<?php if ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="info") {?>fa fa-info<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="warning") {?>fa fa-warning<?php } elseif ($_smarty_tpl->tpl_vars['NOTI']->value['level']=="error") {?>fa fa-ban<?php }?>"></i><?php echo $_smarty_tpl->tpl_vars['NOTI']->value['content'];?>
</a>
                            </li>
                        <?php }
if (!$_smarty_tpl->tpl_vars['NOTI']->_loop) {
?>
                            <li><p><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value['TXT_NO_NOTIFICATIONS'];?>
</p></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </li>
        </ul>
    </span>


</div>

				<!-- Breadcrumb 3 -->
<ol class="breadcrumb bc-2">

    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['BREADCRUMB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['value']->iteration=0;
 $_smarty_tpl->tpl_vars['value']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['value']->iteration++;
 $_smarty_tpl->tpl_vars['value']->index++;
 $_smarty_tpl->tpl_vars['value']->first = $_smarty_tpl->tpl_vars['value']->index === 0;
 $_smarty_tpl->tpl_vars['value']->last = $_smarty_tpl->tpl_vars['value']->iteration === $_smarty_tpl->tpl_vars['value']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['menu']['first'] = $_smarty_tpl->tpl_vars['value']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['menu']['last'] = $_smarty_tpl->tpl_vars['value']->last;
?>
        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['menu']['first']) {?>
             <li>
                <a href="/"> <i class="entypo-home"></i></a>
                <a href="#"> <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
             </li>
        <?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['menu']['last']) {?>
            <li class="active"><strong><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</strong></li>
        <?php } else { ?>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a></li>
        <?php }?>
   <?php } ?>
   <li id="tenant-help">
    <!--<a class="" href="#" onclick="popUp('help/?id_nodo=<?php if (!empty($_smarty_tpl->tpl_vars['idSubMenu2Selected']->value)) {
echo $_smarty_tpl->tpl_vars['idSubMenu2Selected']->value;?>
&name_nodo=<?php echo $_smarty_tpl->tpl_vars['nameSubMenu2Selected']->value;
} else {
echo $_smarty_tpl->tpl_vars['idSubMenuSelected']->value;?>
&name_nodo=<?php echo $_smarty_tpl->tpl_vars['nameSubMenuSelected']->value;
}?>','1000','460')">
        <i class="fa fa-support"></i>
    </a>-->
   </li>
   <li id="tenant-sticky" class="dropdown">
   	<a id="togglestickynote1" href="#">
   		<i class="fa fa-sticky-note"></i>
   	</a>
   </li>
</ol>

<!-- contenido del modulo-->
<div id="neo-contentbox">
    <div id="neo-contentbox-maincolumn">
        <input type="hidden" id="elastix_framework_module_id" value="<?php if (empty($_smarty_tpl->tpl_vars['idSubMenu2Selected']->value)) {
echo $_smarty_tpl->tpl_vars['idSubMenuSelected']->value;
} else {
echo $_smarty_tpl->tpl_vars['idSubMenu2Selected']->value;
}?>" />
        <input type="hidden" id="elastix_framework_webCommon" value="<?php echo $_smarty_tpl->tpl_vars['WEBCOMMON']->value;?>
" />
        <div class="neo-module-content">




<?php }} ?>
