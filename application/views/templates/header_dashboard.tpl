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
<link rel="stylesheet" href="{$base_url}bootstrap/css/bootstrap.min.css" media="screen" />

<!-- jquery-ui Stylesheets -->
<link rel="stylesheet" href="{$base_url}assets/jui/css/jquery.ui.all.css" media="screen" />
<link rel="stylesheet" href="{$base_url}assets/jui/jquery-ui.custom.css" media="screen" />
<link rel="stylesheet" href="{$base_url}assets/jui/timepicker/jquery-ui-timepicker.css" media="screen" />

<!-- Uniform Stylesheet -->
<link rel="stylesheet" href="{$base_url}plugins/uniform/css/uniform.default.css" />

<!-- Plugin Stylsheets first to ease overrides -->

<!-- iButton -->
<link rel="stylesheet" href="{$base_url}plugins/ibutton/jquery.ibutton.css" media="screen" />

<!-- Circular Stat -->
<link rel="stylesheet" href="{$base_url}custom-plugins/circular-stat/circular-stat.css" />

<!-- Fullcalendar -->
<link rel="stylesheet" href="{$base_url}plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" href="{$base_url}plugins/fullcalendar/fullcalendar.print.css" media="print" />

<!-- End Plugin Stylesheets -->

<!-- Main Layout Stylesheet -->
<link rel="stylesheet" href="{$base_url}assets/css/fonts/icomoon/style.css" media="screen" />
<link rel="stylesheet" href="{$base_url}assets/css/mooncake.min.css" media="screen" />
<link rel="stylesheet" href="{$base_url}assets/css/plugins/plugins.min.css" media="screen" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
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
<!-- End of the Header -->