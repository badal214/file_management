<?php
session_start();
   			 ob_start();
if (!isset($_SESSION['login']) && $_SESSION['login'] != true) {
	header("Location: /index.php");
	ob_end_flush();
	exit; 
}
if(isset($_POST['logout'])){
session_unset();
session_destroy();
   echo "<script>
    window.location = 'index.php';
</script>";
}?>
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

   <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
	<title>Easy To Share</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->
  <!-- Nucleo Icons -->

  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

	<!-- core:css -->
	<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/flatpickr/flatpickr.min.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="assets/css/demo1/style.min.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body class="sidebar-dark">
	<div class="main-wrapper">

		<!-- partial:partials/_sidebar.php -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="dashboard.php#" class="sidebar-brand">
          <img class="logo" src="files/main-logo.svg" alt="" style="width:148px; " >
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="general_setting.php" class="nav-link">
              <i class="link-icon" data-feather="settings"></i>
              <span class="link-title">General Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="all_hosting_plan.php" class="nav-link">
              <i class="link-icon" data-feather="settings"></i>
              <span class="link-title">Hosting Plan</span>
            </a>
          </li>
           <li class="nav-item">
            <a href="all_orders.php" class="nav-link">
              <i class="link-icon" data-feather="truck"></i>
              <span class="link-title">All Orders</span>
            </a>
          </li>
            <li class="nav-item">
            <a href="all_users.php" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">All Users</span>
            </a>
          </li>
           <li class="nav-item">
            <a href="all_top_features.php" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Top Features</span>
            </a>
          </li> -->
           <li class="nav-item">
            <a href="all_also_includes.php" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">All Files</span>
            </a>
          </li>
     <!--     <li class="nav-item nav-category">web apps</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="dashboard.php#emails" role="button" aria-expanded="false" aria-controls="emails">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Email</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="emails">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="pages/email/inbox.php" class="nav-link">Inbox</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/read.php" class="nav-link">Read</a>
                </li>
                <li class="nav-item">
                  <a href="pages/email/compose.php" class="nav-link">Compose</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="pages/apps/chat.php" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Chat</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/apps/calendar.php" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Calendar</span>
            </a>
          </li> -->
          
        </ul>
      </div>
    </nav>
   <!-- <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="dashboard.php#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
            <label class="form-check-label" for="sidebarLight">
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
            <label class="form-check-label" for="sidebarDark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="https://www.nobleui.com/html/template/demo1/dashboard">
            <img src="assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="https://www.nobleui.com/html/template/demo2/dashboard">
            <img src="assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav> -->
		<!-- partial -->
	
		<div class="page-wrapper">
					
			<!-- partial:partials/_navbar.php -->
			<nav class="navbar">
				<a href="dashboard.php#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
							<input type="text" class="form-control" id="navbarForm"Disabled>
						</div>
					</form>
					<ul class="navbar-nav">

						
						<li class="">
				
                         		 <div class="dropdown">
                                  <button class="btn btn-main dropdown-toggle my-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                   Admin
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="margin-top: 0 !important;">
                                    <li><form method="post">
                                      <input class="dropdown-item" type="submit" name="logout" value="Log Out">
                                      </form></li>
                                  </ul>
                                </div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->