<?php include('include/header.php'); 
	  include('include/connect.php');
	  $userr_idd=$_SESSION['user_id'];
$hosting_plan=array();

$query="SELECT * FROM `also_included` WHERE `is_on`=1 AND `user_id`='$userr_idd'";
$result=mysqli_query($connect,$query);
 while($row =mysqli_fetch_assoc($result)){
    	$hosting_plan[]=$row;
    	}

if(isset($_POST['delete'])){
  $sr_no=$_POST['delete_id'];
  $query="UPDATE `also_included` SET `is_on`=0 WHERE `sr_no`='$userr_idd'";
	$result=mysqli_query($connect, $query);
	if($result){
		echo"<script> window.location = 'all_also_includes.php';</script>";
	}
	else{
		echo"<script> window.location = 'all_also_includes.php';</script>";
	}

}
?>


	<div class="page-content">


				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <div class="row">
                <div class="col-11">
                <h6 class="card-title">All Files</h6>
                   </div>
                  <div class="col-1">
                <a href="add_also_include.php" class="btn btn-primary">Add</a>
                   </div>
                </div>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>#</th>
						<th>File</th>
                        <th>File Name</th>
						<th>Date</th>
						<th>Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $sr=1; foreach($hosting_plan as $plan){ ?>
                      <tr>
                        <td><?php echo $sr; ?></td>
						<td><a href="../files/<?php echo $plan['file_name']; ?>" ><?php echo $plan['file_name']; ?>"</a></td>
                        <td><?php echo $plan['include_name']; ?></td>
						<td><?php echo $plan['date'] ?></td>
						<td><?php echo $plan['time'] ?></td>
                        <td> <div class="row"><div class="col-6">
                          <span> <a href="edit_also_include.php?features_id=<?php echo $plan['sr_no']; ?>" class="nav-link">
              <i class="link-icon" data-feather="edit"></i>
            </a></span></div><div class="col-6"> <span> <a onclick="delmem(<?php echo $plan['sr_no'];?>)" data-bs-toggle="modal" data-bs-target="#delete_member_modal" class="nav-link">
              <i class="link-icon" data-feather="trash-2"></i>
            </a></span> </div></div> </td>
                      </tr>
                      
                      <?php $sr++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>



<!-- Delete leads Modal -->
	<div class="modal custom-modal fade" id="delete_member_modal" role="dialog">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-body mx-auto">
					<div class="form-header">
						<h3>Delete Also Include</h3>
						<p>Are you sure want to delete?</p><br>
					</div>
					<form action="" method="post">
						<div class="modal-btn delete-action">
							<input type="hidden" name="delete_id" id="delete_id">
							<div class="row">
								<div class="col-3 mx-3">
									<button type="submit" name="delete"
										class="btn btn-primary continue-btn">Delete</button>
								</div>
								<div class="col-3 mx-3">
									<a data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
								</div>
							</div>
						</div>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- /Delete leads Modal -->
<script>
delmem = (id) => {
			$("#delete_id").val(id);
		}
</script>

<?php include('include/footer.php'); ?>