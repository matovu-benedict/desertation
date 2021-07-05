

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img src="images/Umu.PNG" style="widith:50px; height:50px;"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UMU DMS</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>HOME</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Desertation Report</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item" href="UploadDetails.php">Upload Report</a>
            <a class="collapse-item" href="download.php">Download Report</a>
          </div>
        </div>
      </li>
	  
	   <li class="nav-item">
        <a class="nav-link" href="admin.php">
         <i class="fa fa-plus"></i>
          <span>Cordinator Profile</span></a>
      </li>
		
	  
		

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
         <i class="fa fa-plus"></i>
          <span>Student</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="a_student.php">Add Student</a>
            <a class="collapse-item" href="view_student.php">Students Details</a>
            
          </div>
        </div>
      </li>
                  
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed active" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-plus"></i>
          <span>Supervisor</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Welcome:</h6>
            <a class="collapse-item " href="a_supervisor.php"> Add Supervisor:</a>
            <a class="collapse-item" href="view_supervisor.php">Supervisors Details </a>
          </div>
        </div>
      </li>

	  <li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse4">
			  <i class="fas fa-fw fa-folder"></i>
			  <span>Departments</span>
			</a>
			<div id="collapse5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Working on Departement:</h6>
				<a class="collapse-item" href="department.php">Add Departement</a>
				<a class="collapse-item" href="view.department.php">Departements</a>
			  </div>
			</div>
		
		</li>
		
      <li class="nav-item">
			<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
			  <i class="fas fa-fw fa-folder"></i>
			  <span>Assign</span>
			</a>
			<div id="collapse4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
			  <div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Assigning Students:</h6>
				<a class="collapse-item" href="assign.php">Assign Student</a>
				<a class="collapse-item" href="assigned.php">Assigned Students</a>
			  </div>
			</div>
		</li>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-table"></i>
          <span>View Reports</span></a>
		  
      </li>
	  <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="supervisors_comment.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span> Supervisor Comments</span></a>
      </li>
	  
	  <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="cal.php">
          <i class="fas fa-fw fa-calendar"></i>
          <span>Calendar</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
	  
	  
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
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
           <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
         </form>

          
        </div>
      </div>
    </div>
  </div>

