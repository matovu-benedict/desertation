

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <div clas="col-md-12">
			<img src="images/ssm.jpg" class="img-thumbnail">
			</div>



        <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           

          

            <div class="topbar-divider d-none d-sm-block">
              </center>

            </div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
                    Logged in as:
                  <?php 
                  echo $_SESSION['username'];
                  ?>

                </span>
                <i class="fas fa-user fa-2x text-white-300" style="color:maroon;"></i>
              </a>
              <!-- Dropdown - User Information -->
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
           <div class="panel-heading" style="font-weight: bold; color: black;">REGISTRATION FORM FOR DEPARTMENTS</div><br>
<a href="cal.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-calendar fa-sm text-white-50"></i> Calendar</a>

         <p id="demo" style="color: red; font-family: Arial; font-weight: bold;"></p>
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script></center>

          </div>