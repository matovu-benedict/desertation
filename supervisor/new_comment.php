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
		  <h6 style="font-family:Arial black;">Desertation Management System</h6> 
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

        <!-- Begin Page Content -->
        <div class="container-fluid">
<hr class="sidebar-divider">
         <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800" style="color:maroon;">New Comment</h1>
        
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
$result = mysql_query("SELECT * FROM assigned WHERE  username ='".$_SESSION['id']."' ");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
   	
				$regno=$test['regno'];
				$username=$test['username'];
			    $depart=$test['depart'];

?>
	 		

		  
<hr class="sidebar-divider" style="background-color:maroon;">
<label for="comment" style ="color: maroon;">Spervisors Commennt to students</label>
<hr class="sidebar-divider" style="background-color:maroon;">

 
 <form method="post" action= "new_comment_code.php" enctype="multipart/form-data" >
 
    <div class="form-group">
      
      <textarea class="form-control"  name="comment" rows="5" id="comment"></textarea>
	  
    </div>
	
	
	<div class="row form-group">
						<div class="col-lg-12">
							<label>Select student</label>
							
						
<select name="customer_no" class="form-control" id="emailaddress"  required="">
<option value="">Select student Here...</option>
<?php
include("db.php");
$query = "SELECT * FROM assigned WHERE  username ='".$_SESSION['id']."'";

$result = mysql_query($query) or die('Error, query failed');

if(mysql_num_rows($result) == 0)

{

echo "No student assigned to this Supervisor";

}

else

{

while($row = mysql_fetch_array($result))

{

?>

						   
<option value ='<?php echo $row['regno']; ?>'>   <?php echo $row['regno']; ?></option>
                          
 <?php

}

}

?>
						  
						   
						   </select>
						
						
						
						</div>  
					</div> 
	<div class="form-group">
            
            <input type="hidden" name="date"  value="<?php echo $date; ?>"  class="form-control" >
			
			<input type="hidden" name="regno"  value="<?php echo $regno; ?>"  class="form-control" >
			
			<input type="hidden" name="supervisorID"   value="<?php echo $_SESSION['id'];?>" class="form-control" >
			
            </div>
	
	<button name="add"  style="background-color: maroon; color: white; border-radius: 10px;">Send Comment</button>
  </form>
</div>

          <!-- Content Row -->
          <div class="row">


           
           

         




         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  

 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>
 
 

