<?php
include('include/connect.php');

if(isset($_SESSION['login'])){
   echo"<script> window.location = 'https://crystalhost.in/admin/dashboard.php';</script>";
}
if(isset($_POST['submit'])){
    $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password_confirmation=$_POST['cnf_password'];
  if($password != $password_confirmation){
    echo"<script> alert(' password and Confirm password must be same...');</script>";
  }else{
  $query_admin="INSERT INTO `users` (`name`,`email`,`password`)VALUES('$name','$email','$password') ";
  $result_admin=mysqli_query($connect,$query_admin);
        if($result_admin){
            $user_id = mysqli_insert_id($connect);
			session_start();
			ob_start();

             $_SESSION['user_name']=$name;
             $_SESSION['user_id']=$user_id;
             header("Location: user/dashboard.php");
          ob_end_flush();
          exit;
        } 
        else
        {
         echo"<script> alert('Username or Password is Incorrect');</script>";
        }
    }
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

	<title>Admin</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
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
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-0 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card">
							<div class="row">
                <div class="col-md-4 pe-md-0">
                  <div class="auth-side-wrapper">

                  </div>
                </div>
                <div class="col-md-8 ps-md-0">
                  <div class="auth-form-wrapper px-4 py-5">
                    <a href="login.html#" class="noble-ui-logo d-block mb-2">File Distribution Portal</a>
                    <h5 class="text-muted fw-normal mb-4">Easy To share your Folder.</h5>
                    <form class="forms-sample" method="post">
                    <div class="mb-3"> 
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" placeholder="Name" name="name">
                      </div>
                      <div class="mb-3"> 
                        <label for="userEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="userEmail" placeholder="Email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password" name="password">
                      </div>
                      <div class="mb-3">
                        <label for="cnfuserPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="cnfuserPassword" autocomplete="current-password" placeholder="Confirm Password" name="cnf_password">
                      </div>
                      <div class="form-check mb-3">
                        <label class="form-check-label" for="authCheck">
                           Already have an account ?<a href="index.php">Sign in </a>
                        </label>
                      </div>
                      <div>
                        <button type="submit" name="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white">Sign up</button>
    
                      </div>
     
                    </form>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="assets/vendors/feather-icons/feather.min.js"></script>
	<script src="assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->

</body>
</html>