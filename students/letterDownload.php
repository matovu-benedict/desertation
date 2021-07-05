

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
		  UGANDA MARTYRS UNIVERSITY 
 <div class="topbar-divider d-none d-sm-block"></div>
  DESERTATION MANAGEMENT SYSTEM 
          <ul class="navbar-nav ml-auto">

            

          

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
 
                  <?php 
                  echo $_SESSION['regno'];
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

        <!-- Begin Page Content -->
        <div class="container-fluid">
<hr class="sidebar-divider">
         <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
    <h6 style="color:maroon;">Downloadable desertations </h6>


         <p id="demo" style="color: red; font-family: Arial; font-weight: bold;"></p>
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script><center>

          </div>
<hr class="sidebar-divider">

<hr class="sidebar-divider">


</div>

<?php

mysql_connect("localhost","root","");

mysql_select_db("adminpanel");

if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];

$query = "SELECT name, type, size, content FROM files WHERE id = $id";

$result = mysql_query($query) or die('Error, query failed');

list($name, $type, $size, $content) =

mysql_fetch_array($result);

header("Content-length: $size");

header("Content-type: $type");

header("Content-Disposition: attachment; filename=$name");

echo $content; exit;

}

?>





	<style>

   }
    </style>


  </center>

 <?php
include 'db.php';
$result = mysql_query("SELECT * FROM student WHERE regno='".$_SESSION['regno']."'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
   	
				$regno=$test['regno'];
				

?> 


  <div class="card shadow mb-4">
            
            <div class="card-body">
              <div class="table-responsive">
			 <?php
          $connection = mysqli_connect("localhost","root","","adminpanel");
		
          $query = "SELECT * FROM letter ";
          $query_run = mysqli_query($connection, $query);

        ?>
 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" rows="2" >
                 
                   <thead>
            <tr>
              <th style="color:maroon;">ID</th>
			  <th style="color:maroon;">NAME</th>
              <th style="color:maroon;">SIZE</th>
              <th style="color:maroon;">DOWNLOAD</th>
             
              

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
			   <td> <?php echo $row['name']; ?></td>
              <td> <?php echo $row['size']; ?> kb</td>
              <?php echo'
               <td><a href="letterDownload2.php?id='.$row['id'].'"> <button class="btn btn-success"><i class="fa fa-download"></i> Download</button></td>  
                '?>
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
      <!-- End of Main Content -->

  

 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>


