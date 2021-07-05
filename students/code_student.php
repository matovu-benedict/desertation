<?php
include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['submit']))
{
	$fname     =   $_POST['fname'];
    $surname   =   $_POST['surname'];
    $regno     =   $_POST['regno'];
    $phone     =   $_POST['phone'];
    $email     =   $_POST['email'];
    $username  =   $_POST['username'];
    $password  =   $_POST['password'];
    $cpassword =   $_POST['cpassword'];
    $file      =   $_POST['file'];
    $gender    =   $_POST['gender'];


if($password === $cpassword)
{

$query = "INSERT INTO student (fname,surname,regno,phone,email,username,password,cpassword,file,gender) VALUES ('$fname','$surname','$regno','$phone','$email','$username','$password','$cpassword','$file','$gender')";
$query_run = mysqli_query($connection, $query);

if($query_run)
{

$_SESSION['success'] = "Student Profile Added";
header('Location: a_student.php');
}
else
{
$_SESSION['status'] = "Student Profile  Not Added";
header('Location: a_student.php');	
}

}
else
{
$_SESSION['status'] = "Password and Confirm password does not match.";
header('Location: a_student.php');
}

}

 

if(isset($_POST['updatebtn']))
{
$id       =  $_POST['edit_id'];
$username =  $_POST['edit_username'];
$email    =  $_POST['edit_email'];
$phone    =  $_POST['edit_phone'];
$password =  $_POST['edit_password'];


$query = "UPDATE student SET username='$username', email='$email', $phone='$phone',$password='$password' WHERE id='$id'";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
$_SESSION['success'] =  "Your Data is Updated";
header('Location:view_student.php');
}
else 
{
$_SESSION['status'] =  "Your Data is NOT Updated";
header('Location:view_student.php');
}
}








////delete btn
if(isset($_POST['deletebtn']))
{
$id = $_POST['delete_id'];


$query = "DELETE  FROM student WHERE id='$id' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
$_SESSION['success'] =  "Your Data is Deleted";
header('Location: view_student.php');
}
else 
{
$_SESSION['status'] =  "Your Data is Not Deleted";
header('Location: view_student.php');
}
}



?>