<?php
include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['registerbtn']))
{
	$username = $_POST['username'];
       $email = $_POST['email'];
     $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

if($password === $cpassword)
{

$query = "INSERT INTO final (username,email,password) VALUES ('$username','$email','$password')";
$query_run = mysqli_query($connection, $query);

if($query_run)
{

$_SESSION['success'] = "Admin Profile Added";
header('Location: final.php');
}
else
{
$_SESSION['status'] = "Admin Profile  Not Added";
header('Location: final.php');	
}

}
else
{
$_SESSION['status'] = "Password and Confirm password does not match.";
header('Location: final.php');
}

}

 

if(isset($_POST['updatebtn']))
{
$id       =  $_POST['edit_id'];
$username =  $_POST['edit_username'];
$email    =  $_POST['edit_email'];
$password =  $_POST['edit_password'];


$query = "UPDATE final SET username='$username', email='$email', password='$password' WHERE id='$id'";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
$_SESSION['success'] =  "Your Data is Updated";
header('Location:final.php');
}
else 
{
$_SESSION['status'] =  "Your Data is NOT Updated";
header('Location:final.php');
}
}








////delete btn
if(isset($_POST['deletebtn']))
{
$id = $_POST['delete_id'];


$query = "DELETE  FROM final WHERE id='$id' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
$_SESSION['success'] =  "Your Data is Deleted";
header('Location:final.php');
}
else 
{
$_SESSION['status'] =  "Your Data is Not Deleted";
header('Location:final.php');
}
}



?>