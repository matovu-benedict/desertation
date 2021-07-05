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
      


        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

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
                  echo $_SESSION['id'];
                  ?>

                </span>
               <img src="images/pp.PNG" style="width:50px; height: 50px;">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
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

       

</div>

                  <!-- Begin Page Content -->
        <div class="container-fluid">
<hr class="sidebar-divider">
         <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style="color:maroon;">Host Company Details</h1>
        
<a href="cal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="background-color:maroon;"><i class="fas fa-calendar fa-sm text-white-50"></i> Calendar</a>

         <p id="demo" style="color: red; font-family: Arial; font-weight: bold;"></p>
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script></center>

          </div>
		  
		  

			   
   <?php 
date_default_timezone_set("Africa/Kampala");
$date = date('l, F d, Y, g:i a');
   ?>
   
   
    <?php
include 'db.php';
$result = mysql_query("SELECT * FROM supervisor WHERE  id ='".$_SESSION['id']."'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
   	
		$id=$test['id'];
				
			    

?> 
  
		  
<hr class="sidebar-divider" style="background-color:maroon;">
<hr class="sidebar-divider" style="background-color:maroon;">
         
           
     <!-- DataTales Example -->
          <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
			 <?php
          $connection = mysqli_connect("localhost","root","","adminpanel");
		
          $query = "SELECT * FROM company WHERE supervisorID='$id'";
          $query_run = mysqli_query($connection, $query);

        ?>

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" rows="2" >
                 
                   <thead>
            <tr>
			   <th style="color:maroon;">ID</th>
			 <th style="color:maroon;">STUDENT NUMBER</th>           
			  <th style="color:maroon;">F_NAME</th>
              <th style="color:maroon;">L_NAME</th>
              <th style="color:maroon;">EMAIL</th>
             <th style="color:maroon;">COMPANY NAME</th>
			 <th style="color:maroon;">CONTACT</th>
			 
              

            </tr>
          </thead>
		  
                  <tbody>
				  
				   <?php
    if(mysqli_num_rows($query_run) > 0)      
           {
           while($row = mysqli_fetch_assoc($query_run)){
            ?>
                   
				    <tr>					   
              <td> <?php echo $row['id']; ?></td>
			   <td> <?php echo $row['regno']; ?></td>
			   <td> <?php echo $row['fname']; ?></td>
              <td> <?php echo $row['lname']; ?></td>
              <td> <?php echo $row['email']; ?></td>
               <td> <?php echo $row['cname']; ?></td>
			   <td> <?php echo $row['contact']; ?></td>
                 
                
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
           <div>
		  
		   </div></div>
                   
          


		 
		 


         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  

 
<?php

include('includes/footer.php');

?>
 <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

 

