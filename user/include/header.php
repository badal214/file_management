<?php
session_start();
   			 ob_start();
if (!isset($_SESSION['user_name']) && $_SESSION['user_name'] != true) {
	header("Location: index.php");
	ob_end_flush();
	exit; 
}
if(isset($_POST['logout'])){
session_unset();
session_destroy();
   echo "<script>
    window.location = 'http://localhost/file_management/user/index.php';
</script>";
}
?>
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
	<title>File Management System</title>

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
          <img class="logo" src="../files/main-logo.svg" alt="" style="width:148px; " >
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
       
           <li class="nav-item">
            <a href="all_also_includes.php" class="nav-link">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">All Files</span>
            </a>
          </li>
  
          
        </ul>
      </div>
    </nav>
  
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
							<input type="text" class="form-control" id="navbarForm" disabled>
						</div>
					</form>
					<ul class="navbar-nav">

						
						<li class="">
				
                         		 <div class="dropdown">
                                  <button class="btn btn-main dropdown-toggle my-3" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                   <?php echo $_SESSION['user_name']; ?>
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