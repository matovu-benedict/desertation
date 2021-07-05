<?php
session_start();

 if(!$_SESSION['regno'])
 {
 	header('Location: login.php');
 }

?>