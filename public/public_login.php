<?php
session_start();
include('config.php');

if(isset($_POST['login_btn']))
{
	$username = $_POST['username'];
    $password = $_POST['password'];


    $query = "SELECT * FROM public WHERE username='$username' AND password='$password'";
    $query_run = mysqli_query($connection, $query);


if(mysqli_fetch_array($query_run))
{
$_SESSION['username'] = $username;
header('Location: index.php');
}
else{
$_SESSION['status'] = 'Username/ Password is Invalid';
header('Location: login.php');

}

}





?>