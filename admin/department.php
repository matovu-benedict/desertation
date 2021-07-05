<?php
include('security.php');

include('includes/header.php');
include('includes/navbar.php');
include('includes/innerHeader.php');
?>
    <div class="container-fluid">
		<div class="panel panel-default sammacmedia">
			
			<div class="panel-body" style="height:400px;">
			
				<form method="post" action="code_partment.php" enctype="multipart/form-data" >
					<div class="row form-group">
						<div class="col-lg-12">
							<label>Enter Department Name</label>
							<input type="text" class="form-control" name="department"  required>
						</div>  
						
					</div>
					 
					<div class="row">
						<div class="col-md-6">
						  <button type="submit" name="submit" class="btn btn-suc btn-block" style = "background-color: maroon;"><span class="fa fa-plus"></span>Add Dapartment </button>  
					
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
 
 

