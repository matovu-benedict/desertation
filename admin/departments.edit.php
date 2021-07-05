<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="container-fluid">
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Departments
</div>
<div class="card-body">


<?php
$connection = mysqli_connect("localhost","root","","adminpanel");
 if(isset($_POST['edit_btn']))
 {
$id = $_POST['edit_id'];

$query = "SELECT * From departments Where id= '$id'";
$query_run = mysqli_query($connection, $query);

foreach($query_run as $row)
{
?>


<form action="code_partment.php" method="POST">


                <input type="hidden" name="edit_id"  value="<?php echo $row['id'] ?>">

                <div class="form-group">
                         <label>Department_Name</label>
                        <input type="text" name="edit_departmentName"  value="<?php echo $row['departmentName'] ?>" class="form-control" placeholder="Enter Department Name">
                        </div>

                   
                         <
                          
                          


                         <a href="view_student.php" class="btn btn-danger">CANCEL</a>
                         <button type="submit" name="updatebtn" class="btn btn-primary">Update</button>

     </form>
             <?php
}

 }
?>

</div>
</div>
</div>
</div>
 



 
<?php
include('includes/scripts.php');
include('includes/footer.php');

?>