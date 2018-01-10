<?php /* Smarty version Smarty-3.1.21, created on 2018-01-10 12:34:10
         compiled from "/var/www/html/themes/tenant/_common/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9233688515a213192a9c975-30176118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3202bc07a5cdb779fc61ee7d0f2eff018379156f' => 
    array (
      0 => '/var/www/html/themes/tenant/_common/login.tpl',
      1 => 1515555240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9233688515a213192a9c975-30176118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5a213192b77126_47283039',
  'variables' => 
  array (
    'PAGE_NAME' => 0,
    'WEBPATH' => 0,
    'THEMENAME' => 0,
    'HEADER_LIBS_JQUERY' => 0,
    'SUBMIT' => 0,
    'currentyear' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a213192b77126_47283039')) {function content_5a213192b77126_47283039($_smarty_tpl) {?><!--
###############################################
#         MAY THE OLSSOO BE WITH YOU          #
###############################################
#        ____  __    ____ ____ ____  ____     #
#       / __ \/ /   / __ / __ / __ \/ __ \    #
#      / / / / /   / /  / /  / / / / / / /    #
#     / / / / /    \_ \ \_ \/ / / / / / /     #
#    / /_/ / /___ __/ /__/ / /_/ / /_/ /      #
#    \____/_____/____/____/\____/\____/       #
#                                             #
###############################################
#  2014-2016 | Powered by © OLSSOO FACTORY    #
###############################################
#  Call. 1800-2471 | Mail. norman@olssoo.com  #
###############################################
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title>얼쑤 DR-PBX - <?php echo $_smarty_tpl->tpl_vars['PAGE_NAME']->value;?>
</title>


	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/css/custom.css">

	<!--[if lt IE 9]><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
	<![endif]-->

    <?php echo $_smarty_tpl->tpl_vars['HEADER_LIBS_JQUERY']->value;?>

</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax --><?php echo '<script'; ?>
 type="text/javascript">
var baseurl = '';
<?php echo '</script'; ?>
>

<div class="login-container">

	<div class="login-header login-caret">

		<div class="login-content">

			<img src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/images/olssoo_logo_mini.png" width="150" height="150" alt="elastix logo" />

			<p class="description"><strong></strong> </p>
			<p class="description"><strong></strong> </p> 
			<p class="description"><strong>(주)얼쑤팩토리 DR-PBX 데모장비.</strong> </p>
			<p class="description"><strong>Raspberry Pi 3, Debian Jessie</strong> </p> 
			<p class="description"><strong>CallCenter.  <a href="tel:18002471">1800-2471</a></strong> </p>

			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>

	</div>

	<div class="login-progressbar">
		<div></div>
	</div>

	<div class="login-form">

		<div class="login-content">

			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>

			<form method="post">

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>

						<input type="text" class="form-control" name="input_user" id="input_user" placeholder="아이디" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>

						<input type="password" class="form-control" name="input_pass" placeholder="비밀번호" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login" name="submit_login">
						<i class="entypo-login"></i>
						<?php echo $_smarty_tpl->tpl_vars['SUBMIT']->value;?>

					</button>
				</div>

			</form>


			<div class="login-bottom-links">

				<h5><strong>Supported By</strong> <a href="http://www.olssoo.com" style="text-decoration: none;" target='_blank'><strong>OLSSOO FACTORY Inc</strong></a><strong>. 2014 - <?php echo $_smarty_tpl->tpl_vars['currentyear']->value;?>
.</strong></div></h5>
			</div>

		</div>

	</div>

</div>


	<!-- Bottom Scripts -->
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/gsap/main-gsap.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/bootstrap.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/joinable.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/resizeable.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-api.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-login.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-custom.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type='text/javascript' src="<?php echo $_smarty_tpl->tpl_vars['WEBPATH']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['THEMENAME']->value;?>
/js/neon-demo.js"><?php echo '</script'; ?>
>

</body>
</html>
<?php }} ?>
