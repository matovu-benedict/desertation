<?php
session_start();
include('database/dbconfig.php');

if(isset($_POST['login_btn']))
{
	$email_login = $_POST['email'];
    $password_login = $_POST['password'];


    $query = "SELECT * FROM coordinator WHERE email='$email_login' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);


if(mysqli_fetch_array($query_run))
{
$_SESSION['username'] = $email_login;
header('Location: index.php');
}
else{
$_SESSION['status'] = 'Email id/ Password is Invalid';
header('Location: login.php');

}

}





?>