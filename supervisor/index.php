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
		  <h6 style="font-family:Arial black;">Desertation Management System</h6> 
          <ul class="navbar-nav ml-auto">

            

           
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> 
 
                  <?php 
                  echo  $_SESSION['id'];
                  ?>

                </span>
                <i class="fa fa-user fa-2x" style="color:white;"></i>
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

		
		<?php
  include 'db.php';
  $results = mysql_query("SELECT * FROM activity WHERE supervisorId='".$_SESSION['id']."'");
  $activity = mysql_num_rows($results);
?>					
		
		
		
			<?php
  include 'db.php';
  $results = mysql_query("SELECT * FROM files  WHERE username='".$_SESSION['id']."'");
  $files = mysql_num_rows($results);
?>					
		
		
				
		
		
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        
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


 <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Content Row -->
          <div class="row">
 <!--Total Number of administrators-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2" style="background-color:maroon;">
                <div class="card-body" style="background-color:black;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Students Activities</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                       


					   <h4 Style="color:green; ">
                       <?php   echo $activity;  ?>
					</h4>
					
					
					
					
					
                      </div>
                    </div>
                    <div class="col-auto">
                     <i class="fa fa-graduation-cap fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Total Registerd Students -->
            <div class="col-xl-3 col-md-6 mb-4">
               <div class="card border-left-primary shadow h-100 py-2" style="background-color:maroon;">
                <div class="card-body" style="background-color:black;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Uploaded Content</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">                   
														
							
					   <h4 Style="color:green; ">
                       <?php   echo $files;  ?>
					</h4>
						
						
						
                    

                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-user fa-2x"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Submited Comments -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2" style="background-color:maroon;">
                <div class="card-body" style="background-color:black;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Submited Comments</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
						  
						   <?php

                     require 'dbconfig.php';
                        $query = "SELECT id FROM comment  WHERE supervisorId='".$_SESSION['id']."' ORDER BY id";
                        $query_run = mysqli_query($connection, $query);

                         $row =mysqli_num_rows( $query_run);

                         echo '<h4 Style="color:green; ">'.$row.'</h4>';


                         ?>

						  
						  
						  
						  
						  </div>
                        </div>
                        <div class="col">
                          
                        </div>
                      </div>
                    </div>
                   <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Assigned students-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2" style="background-color:maroon;">
                <div class="card-body" style="background-color:black;">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Assigned Students</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
					  
					   <?php

                     require 'dbconfig.php';
                        $query = "SELECT id FROM assigned  WHERE username='".$_SESSION['id']."' ORDER BY id";
                        $query_run = mysqli_query($connection, $query);

                         $row =mysqli_num_rows( $query_run);

                         echo '<h4 Style="color:green; ">'.$row.'</h4>';


                         ?>

					  
					  
					  
					  
					  </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            

          </div>
          <!-- Content Row -->

                     <!-- Content Row -->
<hr class="sidebar-divider" style="background-color:maroon;">
<hr class="sidebar-divider" style="background-color:maroon;">
          

		 <center>	
		 <div class="container">
<script language="javascript" type="text/javascript" >
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

//  DECLARE AND INITIALIZE VARIABLES
var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now


/* VARIABLES FOR FORMATTING
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
      tags to customize your caledanr's look. */

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="1100"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=maroon BORDERCOLOR=maroon><TR><TD WIDTH=500><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="1100"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=MAROON WIDTH=1100 height=20><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=2 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="maroon"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

//   DO NOT EDIT BELOW THIS POINT  //

// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++)
{

// BOLD TODAY'S DAY OF WEEK
if(weekday == index)
cal += TD_start + '<font color="red"><b>' + day_of_week[index] + '</b></font>' + TD_end;

// PRINTS DAY
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  // RETURNS THE NEXT DAY TO PRINT
  week_day =Calendar.getDay();

  // START NEW ROW FOR FIRST DAY OF WEEK
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
  var day  = Calendar.getDate();

  // HIGHLIGHT TODAY'S DATE
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  // PRINTS DAY
  else
  cal += TD_start + day + TD_end;
  }

  // END ROW FOR LAST DAY OF WEEK
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  // INCREMENTS UNTIL END OF THE MONTH
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop

cal += '</TD></TR></TABLE></TABLE>';

//  PRINT CALENDAR
document.write(cal);

//  End -->
</script>	
	</div>	
	</center>	
           

         




         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

  

 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>
 
 

