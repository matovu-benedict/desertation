<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
include('includes/innerHeader.php');
?>
    <div class="container-fluid">
		<div class="panel panel-default sammacmedia">
				<div class="panel-heading" style="color:maroon;">FORM ASSIGNING STUDENTS TO SUPERVISORS</div><br><br>
			<div class="panel-body cotainer">
				<form method="post" id="assignForm" name="assignForm" action="#">
					<div class="row form-group">
						<div class="col-lg-12">
							<label style="color:maroon;">Select student</label>
							<select  name="reg"  class="form-control">
								<option value="">Select student</option>
								<?php
									$con = mysqli_connect("localhost","root","","adminpanel");
									$depart = mysqli_query($con, "SELECT * FROM student WHERE supervisorID = 0");
									while($row = mysqli_fetch_array($depart)){?>
										<option value="<?php echo $row['regno'];?>">
										<?php echo $row['fname'];?> <?php echo $row['surname'];?>
										</option>
									<?php
									}
								?>
							</select>
						
						</div>  
					</div>
					<div class="row form-group">
						<div class="col-lg-12">
							<label style="color:maroon;">Select Departments</label>
							<select id="depart" name="depart"  class="form-control">
								<option value="">Select Department</option>
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
					  

					<div class="row form-group">
						<div class="col-lg-12">
							<label style="color:maroon;">Select Supervisors (Displays Supervisors From selected department and have less than 6 students)</label>
							<select id="output" name="supervisors" class="form-control"></select>						
						</div>  
					</div>   
 

					<div class="row">
						<div class="col-md-12">
						  <button type="submit" name="submit" class="btn btn-suc btn-block" style = "background-color: maroon;">Assign </button>  
						</div>
				
					</div>
				</form>
				<br>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>
<script src="js/assign.js"></script>

 
 

