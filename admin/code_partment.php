<?php
include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['submit']))
{
   	if(isset($_POST['submit'])){
	   $part = $_POST['department'];
	   if($part ==""){
			//Please enter department name
	   }else{
		$query = "INSERT INTO departments (departmentName) VALUES ('$part')";
		$query_run = mysqli_query($connection, $query);
			header('location: department.php');
			
			//A new partment has been added
			
			

	   }
	}

}