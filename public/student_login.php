<?php
session_start();
include('database/dbconfig.php');

if(isset($_POST['login_btn']))
{
	$regno = $_POST['regno'];
    $password_login = $_POST['password'];


    $query = "SELECT * FROM student WHERE regno='$regno' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);


if(mysqli_fetch_array($query_run))
{
$_SESSION['regno'] = $regno;
header('Location: index.php');
}
else{
$_SESSION['status'] = 'Username/ Password is Invalid';
header('Location: login.php');

}

}





?>