<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');

?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <div clas="col-md-12">
			<img src="images/ssm.jpg" class="img-thumbnail">
			</div>



        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block">
              </center>

            </div>

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
        
<a href="cal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-calendar fa-sm text-white-50"></i> Calendar</a>

         <p id="demo" style="color: red; font-family: Arial; font-weight: bold;"></p>
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script></center>

          </div>




          <!-- Content Row -->
          <div class="row">

            <!--Total Number of administrators-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">USERS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                       <?php

                     require 'dbconfig.php';
                        $query = "SELECT id FROM coordinator ORDER BY id";
                        $query_run = mysqli_query($connection, $query);

                         $row =mysqli_num_rows( $query_run);

                         echo '<h4 Style="color:green; ">'.$row.'</h4>';


                       ?>

                      </div>
                    </div>
                    <div class="col-auto">
                       <i class="fas fa-users  text-white-300" style="color:maroon;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Registerd Students -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">STUDENTS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php

                     require 'dbconfig.php';
                        $query = "SELECT regno FROM student ORDER BY regno";
                        $query_run = mysqli_query($connection, $query);

                         $row =mysqli_num_rows( $query_run);

                         echo '<h4 Style="color:green; ">'.$row.'</h4>';


                         ?>

                    </div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-graduation-cap  text-white-300" style="color:maroon;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">SUPERVISORS</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
						  
						   <?php

                     require 'dbconfig.php';
                        $query = "SELECT id FROM supervisor ORDER BY id";
                        $query_run = mysqli_query($connection, $query);

                         $row =mysqli_num_rows( $query_run);

                         echo '<h4 Style="color:green; ">'.$row.'</h4>';


                         ?>

						  
						  
						  
						  
						  </div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                   <div class="col-auto">
                       <i class="fas fa-users  text-white-300" style="color:maroon;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            

<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">ACTIVITIES</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
						  
						   <?php

                     require 'dbconfig.php';
                        $query = "SELECT id FROM activity ORDER BY id";
                        $query_run = mysqli_query($connection, $query);

                         $row =mysqli_num_rows( $query_run);

                         echo '<h4 Style="color:green; ">'.$row.'</h4>';


                         ?>

						  
						  
						  
						  
						  </div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                   <div class="col-auto">
                       <i class="fas fa-th  text-white-300" style="color:maroon;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
			
			<!-- Total Registerd Students -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">DESERTATION REPORTS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php

                     require 'dbconfig.php';
                        $query = "SELECT id FROM files ORDER BY id";
                        $query_run = mysqli_query($connection, $query);

                         $row =mysqli_num_rows( $query_run);

                         echo '<h4 Style="color:green; ">'.$row.'</h4>';


                         ?>

                    </div>
                    </div>
                    <div class="col-auto">
                     <i class="fas fa-book text-white-300" style="color:maroon;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
			
			<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">COMMENTS</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
						  
						   <?php

                     require 'dbconfig.php';
                        $query = "SELECT id FROM comment ORDER BY id";
                        $query_run = mysqli_query($connection, $query);

                         $row =mysqli_num_rows( $query_run);

                         echo '<h4 Style="color:black; ">'.$row.'</h4>';


                         ?>

						  
						  
						  
						  
						  </div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                   <div class="col-auto">
                       <i class="fas fa-comments  text-white-300" style="color:maroon;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			
			
			
			
          </div>
          <!-- Content Row -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content --> 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>
 
 

