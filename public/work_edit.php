
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
<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Admin profile
</div>
<div class="card-body">


<?php
$connection = mysqli_connect("localhost","root","","adminpanel");
 if(isset($_POST['edit_btn']))
 {
$id = $_POST['edit_id'];

$query = "SELECT * From activity Where id= '$id'";
$query_run = mysqli_query($connection, $query);

foreach($query_run as $row)
{
?>


<form action="work.php" method="POST">


                <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">

                <div class="form-group">
                         <label>WORK</label>
                        <input type="text" name="work"  value="<?php echo $row['work'] ?>" class="form-control" placeholder="Enter Username">
                        </div>

         
            
                         <a href="my_activity.php" class="btn btn-danger">CANCEL</a>
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