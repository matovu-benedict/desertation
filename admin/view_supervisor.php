  <?php
session_start();

include('dbconfig.php');


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

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

          
           

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
 
                  <?php 
                  echo $_SESSION['username'];
                  ?>

                </span>
               <i class="fas fa-user fa-2x text-white-300" style="color:maroon;" ></i>
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
            <h1 class="h3 mb-0 text-white-800" style="color:maroon;">Supervisor Details</h1>

          </div>


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
          $query = "SELECT * FROM supervisor";
          $query_run = mysqli_query($connection, $query);

        ?>
     
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="color:maroon;">
          <thead>
            <tr>
              <th>No</th>
              <th>First Name</th>
              <th>Sur Name</th>
             <th>Phone</th>
              <th>Email</th>
			   <th>Department</th>
              <th>Username</th>
             
              <th>File</th>
               
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
              <td> <?php echo $row['fname']; ?></td>
              <td> <?php echo $row['surname']; ?></td>
              <td> <?php echo $row['phone']; ?></td>
              <td> <?php echo $row['email']; ?></td>
              <td> <?php echo $row['department']; ?></td>
              <td> <?php echo $row['username']; ?></td>
            
             <td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image">'; ?></td>
            
                 <td>
                  <form action = "supervisor_edit.php" method="POST">
                    <input type = "hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                   <button type="submit"  name="edit_btn" class="btn btn-success"> EDIT</button>
                 </form>
                 </td>
                <td>


                  <form action="code_supervisor.php" method="POST">
                    <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                   <button type="submit" name="deletebtn" class="btn btn-danger">DELETE</button>
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



          <!-- Content Row -->

         




         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  

 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>
 