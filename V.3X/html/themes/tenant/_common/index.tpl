<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
        <title>얼쑤 D-PBX</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{$WEBPATH}themes/{$THEMENAME}/css/bootstrap.css">
    <link rel="stylesheet" href="{$WEBPATH}themes/{$THEMENAME}/css/neon-core.css">
    <link rel="stylesheet" href="{$WEBPATH}themes/{$THEMENAME}/css/neon-theme.css">
    <link rel="stylesheet" href="{$WEBPATH}themes/{$THEMENAME}/css/neon-forms.css">
    <link rel="stylesheet" href="{$WEBPATH}themes/{$THEMENAME}/css/custom.css">

    <link rel="stylesheet" href="{$WEBPATH}themes/{$THEMENAME}/styles.css" />
    <link rel="stylesheet" href="{$WEBPATH}themes/{$THEMENAME}/widgets.css" />
    <link rel="stylesheet" href="{$WEBPATH}themes/{$THEMENAME}/help.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="{$WEBPATH}themes/{$THEMENAME}/header.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="{$WEBPATH}themes/{$THEMENAME}/content.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="{$WEBPATH}themes/{$THEMENAME}/applet.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="{$WEBPATH}libs/js/sticky_note/sticky_note.css" />
    <link rel="stylesheet" media="screen" type="text/css" href="{$WEBPATH}themes/{$THEMENAME}/table.css" />

    {$HEADER_LIBS_JQUERY}

	<script type='text/javascript' src="libs/js/base.js"></script>
        <script type='text/javascript' src="libs/js/sticky_note/sticky_note.js"></script>
        <script type='text/javascript' src="libs/js/iframe.js"></script>

        {$HEADER}
    {$HEADER_MODULES}
    </head>
    <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="mainBody page-body" {$BODYPARAMS}>
    <div class="page-container">

        {$MENU} <!-- Viene del tpl menu.tlp-->
        {if !empty($mb_message)}
        <div class="div_msg_errors" id="message_error">
           {if !empty($mb_title)}
           <div class="div_msg_errors_title" style="padding-left:5px">
              <b style="color:red;">&nbsp;{$mb_title}</b>
           </div>
           {/if}
           <div class="div_msg_errors_dismiss">
               <i class="fa fa-remove" javascript="onclick='hide_message_error();'"></i>
           </div>
            <div style="padding:6px 30px 6px 15px">
            {$mb_message}
            </div>
        </div>
        {/if}
                {$CONTENT}
            </div>
            </div>

        </div>

        <!-- Footer -->
        <footer class="main" style="margin-left:16px;">
		<h5><strong>Supported By</strong> <a href="http://www.olssoo.com" style="text-decoration: none;" target='_blank'><strong>OLSSOO FACTORY Inc</strong></a><strong>. 2014 - {$currentyear}.</strong></div></h5>
        </footer>

        <br />

         <div id="neo-sticky-note">
                  <div id="neo-sticky-note-text"></div>
                  <div id="neo-sticky-note-text-edit">
                        <textarea id="neo-sticky-note-textarea"></textarea>
                        <div id="neo-sticky-note-text-char-count"></div>
                        <input type="button" value="{$SAVE_NOTE}" id="neo-submit-button" />
                        <div id="auto-popup">AutoPopUp <input type="checkbox" id="neo-sticky-note-auto-popup" value="1"></div>
                  </div>
                  <div id="neo-sticky-note-text-edit-delete"></div>
                </div>
{* SE GENERA EL AUTO POPUP SI ESTA ACTIVADO *}
{if $AUTO_POPUP eq '1'}{literal}
<script type='text/javascript'>
$(document).ready(function(e) {
    $("#neo-sticky-note-auto-popup").prop('checked', true);
    $('#togglestickynote1').click();
});
</script>
{/literal}{/if}

        <!-- Neo Progress Bar -->
        <div class="neo-modal-elastix-popup-box">
            <div class="neo-modal-elastix-popup-title"></div>
            <div class="neo-modal-elastix-popup-close"></div>
            <div class="neo-modal-elastix-popup-content"></div>
        </div>
        <div class="neo-modal-elastix-popup-blockmask"></div>

    <!-- Bottom Scripts -->
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/gsap/main-gsap.js"></script>
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/bootstrap.js"></script>
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/joinable.js"></script>
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/resizeable.js"></script>
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/neon-api.js"></script>
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/jquery.validate.min.js"></script>
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/neon-login.js"></script>
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/neon-custom.js"></script>
    <script type='text/javascript' src="{$WEBPATH}themes/{$THEMENAME}/js/neon-demo.js"></script>
    </div>
    </body>
</html>
