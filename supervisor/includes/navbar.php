

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     
	  
<center><img src="images/umu.png" style="width: 100px; height: 100px; align-top:2px;"></center>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-desktop"></i>
          <span>HOME</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="allocated_students.php">
         <i class="fa fa-user"></i>
          <span>Assigned Students</span></a>
      </li>
	   <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="studentContent.php">
        <i class="fa fa-download"></i>
          <span>Desertation Reports</span></a>
      </li>
	  

      <!--
	  <li class="nav-item">
        <a class="nav-link" href="placementDetails.php">
         <i class="fa fa-folder"></i>
          <span> Host Company Details</span></a>
      </li> -->
	  
	   <li class="nav-item">
        <a class="nav-link" href="students_activity.php">
         <i class="fa fa-folder"></i>
          <span> Students Dailly Activities</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="new_comment.php">
         <i class="fa fa-plus"></i>
          <span>Add comments</span></a>
      </li>
                  
      

      <li class="nav-item">
        <a class="nav-link" href="my_comment.php">
         <i class="fa fa-arrow-right"></i>
          <span>View Comments</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
<a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->


 <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

     <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel" style="color:maroon;">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" style="color:maroon;">Are You Sure You Want To Log Out.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> 
        
         <form action="logout.php" method="POST">
           <button type="submit" name="logout_btn" class="btn btn-primary" style="background-color:maroon;">Logout</button>
         </form>

          
        </div>
      </div>
    </div>
  </div>

