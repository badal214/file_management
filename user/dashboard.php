<?php
include('include/header.php');
include('include/connect.php');
$userr_idd=$_SESSION['user_id'];
//count number of users
// $users_query="SELECT * FROM `users` WHERE `is_on` = 1";
// $users_result=mysqli_query($connect,$users_query);
// $all_users=mysqli_num_rows($users_result);

//count number of Orders
$orders_query="SELECT * FROM `also_included` WHERE `is_on`=1 AND `user_id`='$userr_idd'";
$orders_result = mysqli_query($connect,$orders_query);
$all_orders = mysqli_num_rows($orders_result);

//count number of plans
// $plans_query ="SELECT * FROM `hosting_plan` WHERE `is_on` =1";
// $plans_result=mysqli_query($connect,$plans_query);
// $all_plans = mysqli_num_rows($plans_result);

?>

   <div class="container-fluid py-4" style="margin-top:70px;">
      <div class="row">
   
        
        <!-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Users</p>
                <h4 class="mb-0"><?php // echo $all_users; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            
          </div>
        </div> -->
<div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">local_shipping</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Files</p>
                <h4 class="mb-0"><?php echo $all_orders; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            
          </div>
        </div>

        <!-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-danger shadow-danger text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">local_library</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Hosting Plans</p>
                <h4 class="mb-0"><?php //echo $all_plans; ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            
          </div>
        </div> -->
      </div>
</div>
			<?php
include('include/footer.php');
?>