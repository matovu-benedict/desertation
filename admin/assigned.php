<?php
include('security.php');


include('dbconfig.php');


include('includes/header.php');
include('includes/navbar.php');

?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         
          <!-- Topbar Navbar -->
		  <h6 style="font-family:Arial black;" >Uganda Martyrs University<h6> 
 <div class="topbar-divider d-none d-sm-block"></div>
		  <h6 style="font-family:Arial black;">Internship Progress Tracking System</h6> 
          <ul class="navbar-nav ml-auto">


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
 
                  <?php 
                  echo $_SESSION['username'];
                  ?>

                </span>
               <i class="fas fa-user fa-2x text-white-300" style="color:maroon;"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
           
          </div>





<div class="container-fluid">
<div class="card shadow mb-4">
   

<div class="card-body">
<?php
  if(isset($_SESSION['success']) && $_SESSION['success'] !="")
  {
    echo '<h2 class="bg-primary text=white">'.$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
  }
if(isset($_SESSION['status']) && $_SESSION['status'] !="")
  {
    echo '<h2 class="bg-danger text=white">'.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
  }


   ?> 
      <div class="table-responsive">

        <?php
          $connection = mysqli_connect("localhost","root","","adminpanel");
          $query = "SELECT * FROM assigned";
          $query_run = mysqli_query($connection, $query);

        ?>
     
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SUPERVISOR ID</th>
              <th>REG NUMBER</th>
              <th>DEPARTMENT</th>
		
               
            </tr>
          </thead>
          <tbody>
   <?php
    if(mysqli_num_rows($query_run) > 0)      
           {
           while($row = mysqli_fetch_assoc($query_run)){
            ?>

         <tr>
              <td> <?php echo $row['username']; ?></td>
              <td> <?php echo $row['regno']; ?></td>
              <td> <?php echo $row['depart']; ?></td>
			 
             
        </tr>

              <?php

           } 
           }

           else{
            echo "No Record Found";
           }
   ?>
   
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


 </div>
 </div>
</div>






        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  

 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>
 
 

