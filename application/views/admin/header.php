<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Queen Villas Administration Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="QueenVillas Admin.">
	<meta name="author" content="Robby Prima">

	<!-- The styles -->
	<link id="bs-css" href="/assets/css/bootstrap-classic.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="/assets/css/bootstrap-classic.css" rel="stylesheet">
	<link href="/assets/css/charisma-app.css" rel="stylesheet">
	<link href="/assets/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='/assets/css/fullcalendar.css' rel='stylesheet'>
	<link href='/assets/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='/assets/css/chosen.css' rel='stylesheet'>
	<link href='/assets/css/uniform.default.css' rel='stylesheet'>
	<link href='/assets/css/colorbox.css' rel='stylesheet'>
	<link href='/assets/css/jquery.cleditor.css' rel='stylesheet'>
	<link href='/assets/css/jquery.noty.css' rel='stylesheet'>
	<link href='/assets/css/noty_theme_default.css' rel='stylesheet'>
	<link href='/assets/css/elfinder.min.css' rel='stylesheet'>
	<link href='/assets/css/elfinder.theme.css' rel='stylesheet'>
	<link href='/assets/css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='/assets/css/opa-icons.css' rel='stylesheet'>
	<link href='/assets/css/uploadify.css' rel='stylesheet'>
	<script src="/assets/js/jquery-1.7.2.min.js"></script>
	<script src="/assets/js/jquery.slugify.js"></script>
	
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="/assets/img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="/admin"><img alt="Charisma Logo" src="/assets/img/logo_resp.png" /></a>
				
				<!-- theme selector starts -->

				<!-- theme selector ends -->
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="/admin/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>