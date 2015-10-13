<?php /* Smarty version 3.1.27, created on 2015-10-13 11:38:17
         compiled from "application\views\templates\header_dashboard.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23646561cd1094eceb8_72284471%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f07871d577a73bc55b951707adfb9bb15c2354f4' => 
    array (
      0 => 'application\\views\\templates\\header_dashboard.tpl',
      1 => 1444723751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23646561cd1094eceb8_72284471',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_561cd109a4beb3_13331473',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561cd109a4beb3_13331473')) {
function content_561cd109a4beb3_13331473 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23646561cd1094eceb8_72284471';
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta name="description" content="" />
<meta name="author" content="" />

<!-- Bootstrap Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap/css/bootstrap.min.css" media="screen" />

<!-- jquery-ui Stylesheets -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/jui/css/jquery.ui.all.css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/jui/jquery-ui.custom.css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/jui/timepicker/jquery-ui-timepicker.css" media="screen" />

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/uniform/css/uniform.default.css" />

<!-- Plugin Stylsheets first to ease overrides -->

<!-- iButton -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/ibutton/jquery.ibutton.css" media="screen" />

<!-- Circular Stat -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
custom-plugins/circular-stat/circular-stat.css" />

<!-- Fullcalendar -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
plugins/fullcalendar/fullcalendar.print.css" media="print" />

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/fonts/icomoon/style.css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/mooncake.min.css" media="screen" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/plugins/plugins.min.css" media="screen" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
<![endif]-->

<title>Beat Tracker</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<!-- Start Header UI of the template -->

<div id="wrapper" class="full">
	<header id="header" class="navbar navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<div class="brand-wrap pull-left">
					<div class="brand-img">
						<a class="brand" href="#">
							Beat Tracker
						</a>
					</div>
				</div>
				
				<div id="header-right" class="clearfix">
					<div id="nav-toggle" data-toggle="collapse" data-target="#navigation" class="collapsed">
						<i class="icon-caret-down"></i>
					</div>
					
					<div id="header-functions" class="pull-right">
						<div id="user-info" class="clearfix">
							<span class="info">
								Welcome
								<span class="name">Shana-chan</span>
							</span>
							<div class="avatar">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown">
									<img src="assets/images/pp.jpg" alt="Avatar" />
								</a>
								<ul class="dropdown-menu pull-right">
									<li><a href="profile.html"><i class="icol-user"></i> My Profile</a></li>
									<li><a href="#"><i class="icol-layout"></i> My Invoices</a></li>                                        
									<li class="divider"></li>
									<li><a href="index.html"><i class="icol-key"></i> Logout</a></li>
								</ul>
							</div>
						</div>
						<div id="logout-ribbon">
							<a href="index.html"><i class="icon-off"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<!-- End of the Header --><?php }
}
?>