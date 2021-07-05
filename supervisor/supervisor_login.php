<?php
session_start();
include('database/dbconfig.php');

if(isset($_POST['login_btn']))
{
	$id = $_POST['id'];
    $password_login = $_POST['password'];


    $query = "SELECT * FROM supervisor WHERE id='$id' AND password='$password_login'";
    $query_run = mysqli_query($connection, $query);


if(mysqli_fetch_array($query_run))
{
$_SESSION['id'] = $id;
header('Location: index.php');
}
else{
$_SESSION['status'] = ' id/ Password is Invalid';
header('Location: login.php');

}

}





?>