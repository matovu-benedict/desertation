<?php
$servername = "localhost";
$db_name = "adminpanel";
$username = "root";
$password = ""; // I don't have any password which is bad 
 
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
?>
