<?php include('include/header.php');
include('include/connect.php');
$features_id=$_GET['features_id'];
$features_sql="SELECT * FROM `also_included` WHERE `sr_no`='$features_id'";
$features_result=mysqli_query($connect,$features_sql);
$features = mysqli_fetch_assoc($features_result);
  
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
  $sr_no = $_POST['sr_no'];
  $files = $_FILES['file'];
  if($files['name']!=""){
	$fname = $image;
		$fileName = $files['name'];
		$fileTempName = $files['tmp_name'];
		$fileSize = $files['size'];
		$fileType = $files['type'];
		$fileName = preg_replace('/\s+/', '', $fileName);
		if (!empty($fileName) && $fileSize > 0) {
			move_uploaded_file($fileTempName, "files/" . $fileName);
		}}
		else{
			$fileName = $features['file_name'];
		}
	$query="UPDATE `also_included` SET `include_name` = '$name', `file_name` = '$fileName' WHERE `also_included`.`sr_no` = '$sr_no';";
	$result=mysqli_query($connect, $query);
if($result){
		echo"<script> window.location = '/all_also_includes.php';</script>";
	}
	else{
		echo"<script> window.location = '/edit_also_include.php';</script>";
	}

}


 ?>

<div class="col-lg-12 grid-margin stretch-card" style="margin-top: 45px;">
						<div class="card">
							<div class="card-body">
								<h4 class="card-title">Edit Also Include</h4>
								
								<form id="signupForm" method="post" enctype="multipart/form-data">
								<div class="mb-3 col-sm-6">
										<a href="files/<?php echo $features['file_name']; ?>" ><?php echo $features['file_name']; ?>"</a>
										<input id="name" class="form-control" name="file" type="file"  >
									</div>
                                <div class="mb-3 col-sm-6">
										<label for="name" class="form-label">Name</label>
										<input id="name" class="form-control" name="name" type="text" value="<?php echo $features['include_name'] ; ?>" >
                                  		<input type="hidden" name="sr_no" value="<?php echo $features_id ; ?>">
									</div>
									


								
									<input class="btn btn-primary" type="submit" value="Update" name="submit">
								</form>
							</div>
						</div>
					</div>

 <?php include('include/footer.php'); ?>