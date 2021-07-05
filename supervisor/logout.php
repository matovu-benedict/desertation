<?php
session_start();

if(isset($_POST['logout_btn']))
{
	session_destroy();
	unset($_SESSION['id']);
	header('Location: ../system/index.html');
}
?>