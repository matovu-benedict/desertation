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
		  <h6 style="font-family:Arial black;">Desertation Management System</h6> 
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
            <h1 class="h3 mb-0 text-gray-800">Cordinator </h1>

          </div>


<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Coordinator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="code_admin.php" method="POST">
      <div class="modal-body">
           <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" required="">
            </div>


            <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email" required="">
            </div>


             <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required="">
             </div>


            <div class="form-group">
            <label>Confirm Password </label>
            <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required="">
            </div>

         </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registerbtn" class="btn btn-primary">Save </button>
      </div>
    </form>

    </div>
  </div>
</div>


<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
 Add User
</button>

</h6>
</div>

<div class="card-body">
<?php
  if(isset($_SESSION['success']) && $_SESSION['success'] !="")
  {
    echo '<h5 class="bg-primary text=white">'.$_SESSION['success'].'</h5>';
    unset($_SESSION['success']);
  }
if(isset($_SESSION['status']) && $_SESSION['status'] !="")
  {
    echo '<h5class="bg-danger text=white">'.$_SESSION['status'].'</h5>';
    unset($_SESSION['status']);
  }


   ?> 
      <div class="table-responsive">

        <?php
          $connection = mysqli_connect("localhost","root","","adminpanel");
          $query = "SELECT * FROM coordinator";
          $query_run = mysqli_query($connection, $query);

        ?>
     
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Id</th>
              <th>Username</th>
              <th>Email</th>
              <th>Password</th>
              <th>EDIT</th>
              <th>DELETE</th>

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
              <td> <?php echo $row['username']; ?></td>
              <td> <?php echo $row['email']; ?></td>
              <td> <?php echo $row['password']; ?></td>
                 <td>
                  <form action = "admin_edit.php" method="POST">
                    <input type = "hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                   <button type="submit"  name="edit_btn" class="btn btn-success"> EDIT</button>
                 </form>
                 </td>
                <td>


                  <form action="code_admin.php" method="POST">
                    <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                   <button type="submit" name="deletebtn" class="btn btn-danger" >DELETE</button>
                   </form>
                 </td>
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
 
 

