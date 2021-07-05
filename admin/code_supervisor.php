<?php
include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['submit']))
{
   $fname      =    $_POST['fname'];
   $surname    =    $_POST['surname'];
   $phone      =    $_POST['phone'];
   $email      =    $_POST['email'];
   $department =    $_POST['department'];
   $username   =    $_POST['username'];
   $password   =    $_POST['password'];
   $cpassword  =    $_POST['cpassword'];
   $image      =    $_FILES["mypic"]['name'];
  $workNo      =    $_POST['workNo'];
if($password === $cpassword)
{
//get depart name 
$dName = mysqli_query($connection,"SELECT departmentName FROM departments WHERE departmentID = $department");
while($row = mysqli_fetch_array($dName)){
	$departName = $row['departmentName'];
}

$query = "INSERT INTO supervisor (fname,surname,phone,email,departID,department,username,password,cpassword,image,workNo) VALUES ('$fname','$surname','$phone','$email',$department,'$departName','$username','$password','$cpassword','$image','$workNo')";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
move_uploaded_file($_FILES["mypic"]["tmp_name"], "upload/".$_FILES["mypic"]["name"]);
echo '<script>alert("Supervisor Created Successfully!")</script>';
        echo '<script>windows: location="a_supervisor.php"</script>';
}
else
{
echo '<script>alert("Supervisor Created Successfully!")</script>';
        echo '<script>windows: location="a_supervisor.php"</script>';	
}

}
else
{
echo '<script>alert("Failled !")</script>';
        echo '<script>windows: location="a_supervisor.php"</script>';
}

}

 

if(isset($_POST['updatebtn']))
{
$id       =  $_POST['edit_id'];
$username =  $_POST['edit_username'];
$email    =  $_POST['edit_email'];
$phone      =  $_POST['edit_phone'];
$password =  $_POST['edit_password'];

$query = "UPDATE supervisor SET username='$username', email='$email', phone='$phone', password='$password' WHERE id='$id'";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
echo '<script>alert("Updated  successfully !")</script>';
        echo '<script>windows: location="view_supervisor.php"</script>';
}
else 
{
echo '<script>alert("No Data Updated successfully !")</script>';
        echo '<script>windows: location="view_supervisor.php"</script>';
}
}








////delete btn
if(isset($_POST['deletebtn']))
{
$id = $_POST['delete_id'];


$query = "DELETE  FROM supervisor WHERE id='$id' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
echo '<script>alert("Deleted successfully !")</script>';
        echo '<script>windows: location="view_supervisor.php"</script>';
}
else 
{
echo '<script>alert("Failled !")</script>';
        echo '<script>windows: location="view_supervisor.php"</script>';
}
}



?>