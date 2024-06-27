<?php include('include/header.php');
include('include/connect.php');

if (isset($_POST['submit'])) {
	date_default_timezone_set("Asia/kolkata");
	$date =date("d-m-Y");
	$time = date("H:i:s");
	$name = $_POST['name'];
	$files = $_FILES['file'];
	if($files['name']!=""){
		
			$fileName = $files['name'];
			$fileTempName = $files['tmp_name'];
			$fileSize = $files['size'];
			$fileType = $files['type'];
			$fileName = preg_replace('/\s+/', '', $fileName);
			if (!empty($fileName) && $fileSize > 0) {
				move_uploaded_file($fileTempName, "files/" . $fileName);
			}}

	$query="INSERT INTO `also_included` (`include_name`,`file_name`,`date`,`time`,`user_id`) VALUES ('$name','$fileName','$date','$time','admin')";
	$result=mysqli_query($connect, $query);
if($result){
		echo"<script> window.location = 'all_also_includes.php';</script>";
	}
	else{
		echo"<script> window.location = 'add_also_include.php';</script>";
	}
}
 ?>

<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 45px;">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Add File</h4>
								
								<form id="signupForm" method="post" enctype="multipart/form-data">
							<div class="row">
                                <div class="mb-3 col-sm-6">
										<label for="name" class="form-label">Name</label>
										<input id="name" class="form-control" name="name" type="text" >
									</div>
									<div class="mb-3 col-sm-6">
										<label for="name" class="form-label">File</label>
										<input id="name" class="form-control" name="file" type="file" >
									</div>

</div>
								
									<input class="btn btn-primary" type="submit" value="Add" name="submit">
								</form>
							</div>
						</div>
					</div>

 <?php include('include/footer.php'); ?>