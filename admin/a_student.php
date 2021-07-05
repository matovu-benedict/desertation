


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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
             
            </div>
          </form>

          <!-- Topbar Navbar -->
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
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
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

         




<div <div class="panel panel-default sammacmedia">
            <div class="panel-heading" style="font-weight: bold; color:maroon;">REGISTRATION FORM FOR STUDENTS</div>
        <div class="panel-body">
           
            <form method="post" action="code_student.php" enctype="multipart/form-data" >
        
        <div class="row form-group">
          <div class="col-lg-6">
            <label style = "color:maroon;">First Name</label>
              <input type="text" class="form-control" name="fname" pattern="[A-Za-z]{3,}" required>
            </div>  
             <div class="col-lg-6">
            <label style = "color:maroon;">Surname</label>
              <input type="text" class="form-control" name="surname" pattern="[A-Za-z]{3,}" required>
            </div>  
        </div>
            <div class="row form-group">
          
             <div class="col-lg-6">
            <label style = "color:maroon;">RegNo</label>
              <input type="text" class="form-control" name="regNo"  placeholder="" required>
            </div>  
			 <div class="col-lg-6">
            <label style = "color:maroon;">Phone</label>
              <input type="text" class="form-control" name="phone" required>
            </div> 
        </div>   


            <div class="row form-group">
             <div class="col-lg-6">
            <label style = "color:maroon;">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>  
             <div class="col-lg-6">
            <label style = "color:maroon;">Username</label>
              <input type="text" class="form-control" name="username" pattern="[A-Za-z]{3,}" required>
            </div>  
        </div>   

           <div class="row form-group">
             <div class="col-lg-6">
            <label style = "color:maroon;">Password</label>
              <input type="Password" class="form-control" name="password" required>
            </div>  
             <div class="col-lg-6">
            <label style = "color:maroon;"> Confirm Password</label>
              <input type="Password" class="form-control" name="cpassword"  placeholder="" required>
            </div>  
        </div>   

         <div class="row form-group">
             <div class="col-lg-6">
			 
            <label style = "color:maroon;">Gender</label>
			<select class="form-control" name="gender">
              <option>F</option>
			  <option>M</option>
                 
              </select>
            </div>  
			<div class="col-md-6">
						<label style = "color:maroon;">Add Student To Department</label>
						<select name="department" class="form-control">
						<?php
							$con = mysqli_connect("localhost","root","","adminpanel");
							$depart = mysqli_query($con, "SELECT * FROM departments");
							while($row = mysqli_fetch_array($depart)){?>
								<option value="<?php echo $row['departmentID'];?>">
								<?php echo $row['departmentName'];?>
								</option>
							<?php
							}
						?>
					</select>
					</div>
			
			
        </div>

              
                <div class="row">
					
					
					<div class="col-md-6">
						<br>
					  <button type="submit" name="submit" class="btn btn-suc btn-block" style = "background-color: maroon;"><span class="fa fa-plus"></span>Register </button>  
					</div>
					<div class="col-md-6">
						<br>
                 <button type="reset" class="btn btn-dan btn-block" style = "background-color: maroon;"><span class="fa fa-times"></span>Cancel</button>
                </div>
				</div>
            </form>
<br>
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
 
 









