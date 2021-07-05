<?php
session_start();
include('database/dbconfig.php');
include('includes/header.php');

?>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
				   <i class="fas fa-user fa-2x text-white-300" style="color:maroon;"></i>
                    <h1 class="h4 text-gray-900 mb-4">CHANGE PASSWORD</h1>
                    <?php
                      if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                      {
                      	echo '<h5 class ="bg-danger text-white"> '.$_SESSION['status'].'</h5>';
                        unset($_SESSION['status']);
                      }


                   ?>
                  </div>


                  <form class="user" action="" method="POST">
                    <div class="form-group">
                    <input type="text" name="regno" class="form-control form-control-user" value="<?php echo $row['regno'] ?>" placeholder="RegNo...">
                    </div>
                  <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>
                    
                 <button type="submit" name="update" class="btn btn-primary btn-user btn-block" style="background-color:maroon;">Update</button>
                   <hr>
                </form>

              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

<?php
if(isset($_POST['update']))
{
	if(mysqli_query($db,"UPDATE student SET password='$_POST[password]' WHERE regno='$_POST[regno]';" ))
	{
	?>	
	<script type="text/javascript">
alert("The password updated successfully.")
</script>
	<?php

	}
}
?>

<?php
include('includes/scripts.php');
?>
