

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
		  UGANDA MARTYRS UNIVERSITY 
 <div class="topbar-divider d-none d-sm-block"></div>
		  INTERNSHIP TRACKING PROGRESS SYSTEM 
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
            <h1 class="h3 mb-0 text-gray-800"></h1>
    <h6 style="color:maroon;">Download Necessary Files </h6>


         <p id="demo" style="color: red; font-family: Arial; font-weight: bold;"></p>
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
    var d = new Date();
    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
}
</script></center>

          </div>
<hr class="sidebar-divider">

<hr class="sidebar-divider">



</div>

<?php

mysql_connect("localhost","root","");

mysql_select_db("adminpanel");

if(isset($_GET['id'])) { // if id is set then get the file with the id from database

$id = $_GET['id'];

$query = "SELECT name, type, size, content FROM letter WHERE id = $id";

$result = mysql_query($query) or die('Error, query failed');

list($name, $type, $size, $content) =

mysql_fetch_array($result);

header("Content-length: $size");

header("Content-type: $type");

header("Content-Disposition: attachment; filename=$name");

echo $content; exit;

}

?>





	<style>

   }
    </style>


<center>






<?php

$query = "SELECT id, name FROM files";

$result = mysql_query($query) or die('Error, query failed');

if(mysql_num_rows($result) == 0)

{

echo "Database is empty";

}

else

{

while(list($id, $name) = mysql_fetch_array($result))

{

?>

<table width="600" border="02" cellpadding="10" cellspacing="10"><tr bgcolor="white"><td><a href="studentContent.php?id=<?php echo $id;?>"> <?php echo $name; ?></a></td></tr></table>

<?php

}

}

?>

<pre>




<br> 

   </center>      
 

        

      </div>
      <!-- End of Main Content -->

  

 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>


