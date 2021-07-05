

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
        <a class="nav-link" href="studentUpload.php">
         <i class="fa fa-upload"></i>
          <span>Upload Your Desertation</span></a>
      </li>
	  
      <li class="nav-item ">
        <a class="nav-link" href="new_activity.php">
         <i class="fa fa-plus"></i>
          <span>New Activity</span></a>
      </li>
	  
	   <li class="nav-item">
        <a class="nav-link" href="my_activity.php">
         <i class="fa fa-arrow-right"></i>
          <span> My Activity</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="supervisor_comment.php">
         <i class="fa fa-arrow-right"></i>
          <span>View comments</span></a>
      </li>
                 
      <li class="nav-item ">
        <a class="nav-link" href="letterDownload.php">
         <i class="fa fa-download"></i>
          <span> Other Desertations</span></a>
      </li>
      

      <!--<li class="nav-item">
        <a class="nav-link" href="placement.php">
         <i class="fa fa-arrow-right"></i>
          <span>Placement Details</span></a>
      </li> -->

	  
      <li class="nav-item">
        <a class="nav-link" href="update.php">
         <i class="fa fa-arrow-right"></i>
          <span>Change Password</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
<a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">  Logout</i>
                  
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Are You Sure You Want To Log Out.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> 
        
         <form action="logout.php" method="POST">
           <button type="submit" name="logout_btn" class="btn btn-primary" style="background-color:maroon;">Logout</button>
         </form>

          
        </div>
      </div>
    </div>
  </div>

