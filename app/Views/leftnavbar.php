
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
	<meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
	<meta name="author" content="PIXINVENT">
	<title> Online Lecture Scheduling Dashboard </title>
	<link rel="apple-touch-icon" href="https://www.ideamagix.com/assets/images/favicon.ico">
	<link rel="shortcut icon" type="image/x-icon" href="https://www.ideamagix.com/assets/images/favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

	<!-- BEGIN: Vendor CSS-->
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
	<!-- END: Vendor CSS-->

	<!-- BEGIN: Theme CSS-->
	<link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
	<!-- END: Theme CSS-->

	<!-- BEGIN: Page CSS-->
	<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
	<link rel="stylesheet" type="text/css" href="app-assets/css/pages/hospital.css">

	<!-- END: Custom CSS-->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	
<style type="text/css">
	.ajs-message.ajs-custom { color: #31708f;  background-color: #d9edf7;  border-color: #31708f; }
</style>



</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

	<!-- BEGIN: Header-->
	<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
		<div class="navbar-wrapper">
			<div class="navbar-header">
				<ul class="nav navbar-nav flex-row">
					<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
					<li class="nav-item"><a class="navbar-brand" href="<?php echo base_url('dashboard');?>"><img class="brand-logo" alt="modern admin logo" src="https://www.ideamagix.com/assets/images/ideamagix-logo-g.png">
							<h3 class="brand-text">Ideamagix</h3>
						</a></li>
					<li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
				</ul>
			</div>
			<div class="navbar-container content">
				<div class="collapse navbar-collapse" id="navbar-mobile">
					<ul class="nav navbar-nav mr-auto float-left">
						<li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
						<li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
						
						
					</ul>
					<ul class="nav navbar-nav float-right">
						<?php $session=session();?>
						<li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?php $session=session();?>
						<?php echo $session->get('logged_user');?></span><span class="avatar avatar-online"><img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="<?php echo base_url('logout');?>"><i class="ft-power"></i> Logout</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!-- END: Header-->


	<!-- BEGIN: Main Menu-->

	<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
		<div class="main-menu-content">
	
		<?php $session=session(); 
		 if($session->get('user_type') == 'A' ) { ?>

			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
				<li class="active"><a href="<?php echo base_url('dashboard');?>"><i class="la la-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
				<li class=" navigation-header"><span data-i18n="Courses">Courses</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Courses"></i>
				</li>

				<li class=" nav-item"><a href=""><i class="la la-edit"></i><span class="menu-title" data-i18n="Courses">Courses</span></a>
					<ul class="menu-content">
						<li><a class="menu-item" href="<?php echo base_url('addCourse');?>"><i></i><span>Add Courses</span></a>
						</li>
						 <li><a class="menu-item" href="<?php echo base_url('listCourse');?>"><i></i><span>List Courses</span></a>
						</li>
					</ul>
				</li>
				<li class=" nav-item"><a href=""><i class="la la-users"></i><span class="menu-title" data-i18n="Instructors">Instructors</span></a>
					<ul class="menu-content">
						 <li><a class="menu-item" href="<?php echo base_url('listInstructors');?>"><i></i><span>Instructors Data List</span></a>
						</li>
					</ul>
				</li>
				<li class=" nav-item"><a href=""><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="Doctors">Lectures</span></a>
					<ul class="menu-content">
						<li><a class="menu-item" href="<?php echo base_url('addAssignLecture');?>"><i></i><span>Add Assign lectures</span></a></li>
						<li><a class="menu-item" href="<?php echo base_url('assigned_list');?>"><i></i><span>Assigned Lectures</span></a></li>
					</ul>
				</li>
			</ul>
		<?php } ?>	


		<?php  $session=session(); 
		if($session->get('user_type') == 'U' ) { ?>

		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
			<li class="active"><a href="<?php echo base_url('show_lectures');?>"><i class="la la-home"></i><span class="menu-title" data-i18n="Assigned Lectures">Lectures</span></a>
                </li>
		<?php } ?>	
			
		</div>
	</div>
