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

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
     <center> <h6 class="m-0 font-weight-bold " style="color:maroon;">Edit coordinator profile</center>
</div>
<div class="card-body">


<?php
$connection = mysqli_connect("localhost","root","","adminpanel");
 if(isset($_POST['edit_btn']))
 {
$id = $_POST['edit_id'];

$query = "SELECT * From coordinator Where id= '$id'";
$query_run = mysqli_query($connection, $query);

foreach($query_run as $row)
{
?>


<form action="code_admin.php" method="POST">


                <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">

                <div class="form-group">
                         <label style="color:maroon;">Username</label>
                        <input type="text" name="edit_username"  value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username">
                        </div>

                   
                         <div class="form-group">
                         <label style="color:maroon;">Email</label>
                         <input type="email" name="edit_email"  value="<?php echo $row['email'] ?>" class="form-control" placeholder="Enter Email">
                         </div>


                         <div class="form-group">
                         <label style="color:maroon;">Password</label>
                         <input type="password" name="edit_password"  value="<?php echo $row['password'] ?>" class="form-control"   placeholder="Enter password">
                         </div>
            
                         <a href="admin.php" class="btn btn-danger">CANCEL</a>
                         <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>

     </form>
             <?php
}

 }
?>

</div>
</div>
</div>
</div>
 



 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>