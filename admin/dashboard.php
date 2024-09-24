<?php include('includes/admin-header.php'); ?>
<?php include('includes/admin-top-header.php'); ?>
<?php include('includes/admin-sidebar.php'); ?>




<div class="content-wrapper">
         <!-- Container-fluid starts -->
         <!-- Main content starts -->
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Dashboard </h4>

                  <h5 style="text-align:center;color:green;"><?php echo $_SESSION['email']; ?></h5>
                  <hr>
						<?php

                     if(isset($_SESSION['msg-login'])){

                     echo $_SESSION['msg-login'];
                     unset($_SESSION['msg-login']);
                     }

                     ?>
               </div>
            </div>
            <!-- 4-blocks row start -->
            <div class="row dashboard-header">
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Products</span>
                     <h2 class="dashboard-total-products">4500</h2>
                     <span class="label label-warning">Sales</span>Arriving Today
                     <div class="side-box">
                        <i class="ti-signal text-warning-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Products</span>
                     <h2 class="dashboard-total-products">37,500</h2>
                     <span class="label label-primary">Views</span>View Today
                     <div class="side-box ">
                        <i class="ti-gift text-primary-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Products</span>
                     <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                     <span class="label label-success">Sales</span>Reviews
                     <div class="side-box">
                        <i class="ti-direction-alt text-success-color"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6">
                  <div class="card dashboard-product">
                     <span>Products</span>
                     <h2 class="dashboard-total-products">$<span>30,780</span></h2>
                     <span class="label label-danger">Sales</span>Reviews
                     <div class="side-box">
                        <i class="ti-rocket text-danger-color"></i>
                     </div>
                  </div>
               </div>
            </div>


            
          
      </div>
   </div>

<?php include('includes/admin-footer.php'); ?>