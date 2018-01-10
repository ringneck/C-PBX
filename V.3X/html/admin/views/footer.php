<?php
global $amp_conf;
global $module_name, $active_modules;
$version	 = get_framework_version();
$version_tag = '?load_version=' . urlencode($version);
if ($amp_conf['FORCE_JS_CSS_IMG_DOWNLOAD']) {
  $this_time_append	= '.' . time();
  $version_tag 		.= $this_time_append;
} else {
	$this_time_append = '';
}

$html = '';
$html .= '</div>';//page_body
$html .= '<div id="footer">';
// If displaying footer content, force the <hr /> tag to enforce clear separation of page vs. footer
if ($footer_content) {
	$html .= '<hr />';
}
$html .= '<div id="footer_content">';
$html .= $footer_content;
$html .= '</div>'; //footer_content
$html .= '</div>'; //footer
$html .= '</div>'; //page


//add javascript

//localized strings and other javascript values that need to be set dynamically
//TODO: this should be done via callbacks so that all modules can hook in to it
$fpbx['conf'] = $amp_conf;
$clean = array(
		'AMPASTERISKUSER',
		'AMPASTERISKGROUP',
		'AMPASTERISKWEBGROUP',
		'AMPASTERISKWEBUSER',
		'AMPDBENGINE',
		'AMPDBHOST',
		'AMPDBNAME',
		'AMPDBPASS',
		'AMPDBUSER',
		'AMPDEVGROUP',
		'AMPDEVUSER',
		'AMPMGRPASS',
		'AMPMGRUSER',
		'AMPVMUMASK',
		'ARI_ADMIN_PASSWORD',
		'ARI_ADMIN_USERNAME',
		'ASTMANAGERHOST',
		'ASTMANAGERPORT',
		'ASTMANAGERPROXYPORT',
		'CDRDBHOST',
		'CDRDBNAME',
		'CDRDBPASS',
		'CDRDBPORT',
		'CDRDBTABLENAME',
		'CDRDBTYPE',
		'CDRDBUSER',
		'FOPPASSWORD',
		'FOPSORT',
);
	
foreach ($clean as $var) {
	if (isset($fpbx['conf'][$var])) {
		unset($fpbx['conf'][$var]);
	}
}


$fpbx['conf']['text_dir']		= isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], array('he_IL'))
									? 'rtl' : 'ltr';
$fpbx['conf']['uniqueid']		= sql('SELECT data FROM module_xml WHERE id = "installid"', 'getOne');
$fpbx['conf']['dist']			= _module_distro_id();
$fpbx['conf']['ver']			= get_framework_version();
$fpbx['conf']['reload_needed']  = $reload_needed; 
$fpbx['msg']['framework']['reload_unidentified_error'] = _(" error(s) occurred, you should view the notification log on the dashboard or main screen to check for more details.");
$fpbx['msg']['framework']['close'] = _("Close");
$fpbx['msg']['framework']['continuemsg'] = _("Continue");//continue is a resorved word!
$fpbx['msg']['framework']['cancel'] = _("Cancel");
$fpbx['msg']['framework']['retry'] = _("Retry");
$fpbx['msg']['framework']['update'] = _("Update");
$fpbx['msg']['framework']['save'] = _("Save");
$fpbx['msg']['framework']['bademail'] = _("Invalid email address");
$fpbx['msg']['framework']['updatenotifications'] = _("Update Notifications");
$fpbx['msg']['framework']['securityissue'] = _("Security Issue");
$fpbx['msg']['framework']['validation']['duplicate'] = _(" extension number already in use by: ");
$fpbx['msg']['framework']['noupdates'] = _("Are you sure you want to disable automatic update notifications? This could leave your system at risk to serious security vulnerabilities. Enabling update notifications will NOT automatically install them but will make sure you are informed as soon as they are available.");
$fpbx['msg']['framework']['noupemail'] = _("Are you sure you don't want to provide an email address where update notifications will be sent. This email will never be transmitted off the PBX. It is used to send update and security notifications when they are detected.");
$fpbx['msg']['framework']['invalid_responce'] = _("Error: Did not receive valid response from server");
$fpbx['msg']['framework']['invalid_response'] = $fpbx['msg']['framework']['invalid_responce']; // TYPO ABOVE
$fpbx['msg']['framework']['validateSingleDestination']['required'] = _('Please select a "Destination"');
$fpbx['msg']['framework']['validateSingleDestination']['error'] = _('Custom Goto contexts must contain the string "custom-".  ie: custom-app,s,1'); 
$fpbx['msg']['framework']['weakSecret']['length'] = _("The secret must be at minimum six characters in length.");
$fpbx['msg']['framework']['weakSecret']['types'] = _("The secret must contain at least two numbers and two letters.");

if ($covert) {
	$fpbx['conf'] = array (
			'ASTVERSION' => '',
			'uniqueid' => '',
			'reload_needed' => '',
			'dist' => array( 
				'pbx_type' => '',
				'pbx_version' => '')
			);
}

$html .= "\n" . '<script type="text/javascript">'
		. 'var fpbx='
		. json_encode($fpbx)
		. ";\n"

		. 'var extmap='
		. $extmap

		. ';$(document).click();' //TODO: this should be cleaned up eventually as right now it prevents the nav bar from not being fully displayed
 		. '</script>';

if ($amp_conf['USE_GOOGLE_CDN_JS']) {
	$html .= '<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/' 
			. $amp_conf['JQUERYUI_VER'] . '/jquery-ui.min.js"></script>';
	$html .= '<script type="text/javascript" >window.jQuery.ui || document.write(\'<script src="assets/js/jquery-ui-' 
			. $amp_conf['JQUERYUI_VER'] . '.min.js"><\/script>\')</script>';
} else {
	$html .= '<script type="text/javascript" src="assets/js/jquery-ui-' . $amp_conf['JQUERYUI_VER'] . '.min.js"></script>';
}

// Production versions should include the packed consolidated javascript library but if it
// is not present (useful for development, then include each individual library below
if ($amp_conf['USE_PACKAGED_JS'] && file_exists("assets/js/pbxlib.js")) {
	$pbxlibver = '.' . filectime("assets/js/pbxlib.js");
	$html .= '<script type="text/javascript" src="assets/js/pbxlib.js' 
			. $version_tag . $pbxlibver . '"></script>';
} else {
	/*
	 * files below:
	 * jquery.cookie.js - for setting cookies
	 * script.legacy.js - freepbx library
	 * jquery.toggleval.3.0.js - similar to html5 form's placeholder. depreciated
	 * tabber-minimized.js - sed for module admin (hiding content) 
	 */
	$html .= ' <script type="text/javascript" src="assets/js/menu.js' . $version_tag . '"></script>'
		. '<script type="text/javascript" src="assets/js/jquery.hotkeys.js' . $version_tag . '"></script>'
	 	. '<script type="text/javascript" src="assets/js/jquery.cookie.js' . $version_tag . '"></script>'
	 	. '<script type="text/javascript" src="assets/js/script.legacy.js' . $version_tag . '"></script>'
	 	. '<script type="text/javascript" src="assets/js/jquery.toggleval.3.0.js' . $version_tag . '"></script>'
	 	. '<script type="text/javascript" src="assets/js/tabber-minimized.js' . $version_tag . '"></script>';
}
if ($amp_conf['BRAND_ALT_JS']) {
	$html .= '<script type="text/javascript" src="' . $amp_conf['BRAND_ALT_JS'] . $version_tag . '"></script>';
}

if (isset($module_name) && $module_name != '') {
	$html .= framework_include_js($module_name, $module_page);
}

if ($amp_conf['BROWSER_STATS']) {
	$ga = "<script type=\"text/javascript\">
			var _gaq=_gaq||[];
			_gaq.push(['_setAccount','UA-25724109-1'],
					['_setCustomVar',1,'type',fpbx.conf.dist.pbx_type,2],
					['_setCustomVar',2,'typever',fpbx.conf.dist.pbx_version,3],
					['_setCustomVar',3,'astver',fpbx.conf.ASTVERSION,3],
					['_setCustomVar',4,'fpbxver',fpbx.conf.ver,3],
					['_setCustomVar',5,'display',$.urlParam('display'),3],
					/*['_setCustomVar',1,'uniqueid',fpbx.conf.uniqueid,1],
					['_setCustomVar',1,'lang',$.cookie('lang')||'en_US',3],
					*/['_trackPageview']);
			(function(){
				var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;
				ga.src=('https:'==document.location.protocol
							?'https://ssl':'http://www') 
							+'.google-analytics.com/ga.js';
				var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);
			})();</script>";
	$html .= str_replace(array("\t", "\n"), '', $ga);
}

if (!empty($js_content)) {
	$html .= $js_content;
}
//add IE specifc styling polyfills
//offer google chrome frame for the richest experience
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false) {
	$html .= '<!--[if lte IE 10]>';
	$html .= '<link rel="stylesheet" href="assets/css/progress-polyfill.css" type="text/css">';
	$html .= '<script type="text/javascript" src="assets/js/progress-polyfill.min.js"></script>';
	$html .= '<![endif]-->';

	//offer google chrome frame for the richest experience
	$html .= <<<END
	<!--[if IE]>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
		<script>
			!$.cookie('skip_cf_check') //skip check if skip_cf_check cookie is active
				&& CFInstall	//make sure CFInstall is loaded 
				&& !!window.attachEvent //attachEvent is ie only, should never fire in other browsers
				&& window.attachEvent("onload", function() {
				 CFInstall.check({
					preventPrompt: true,
					onmissing: function() {
						$('<div></div>')
							.html('Unfortunately, some features may not work correctly in your '
								+ 'current browser. We suggest that you activate Chrome Frame, '
								+ 'which will offer you the richest posible experience. ')
							.dialog({
								title: 'Activate Chrome Frame',
								resizable: false,
								modal: true,
								position: ['center', 'center'],
								close: function (e) {
									$.cookie('skip_cf_check', 'true');
									$(e.target).dialog("destroy").remove();
								},
								buttons: [
									{
										text: 'Activate',
										click: function() {
												window.location = 'http://www.google.com/chromeframe/?redirect=true';
										}

									},
									{
										text: fpbx.msg.framework.cancel,
										click: function() {
												//set cookie to prevent prompting again in this session
												$.cookie('skip_cf_check', 'true');
												$(this).dialog("destroy").remove();
											}
									}
									]
							});
					}
				});

			});
	</script>
	<![endif]-->
END;
}
echo $html;
?>
</body>
</html>
