<?php
include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");


if(isset($_POST['updatebtn']))
{
$id       =  $_POST['edit_id'];
$work =  $_POST['work'];



$query = "UPDATE activity SET work='$work' WHERE id='$id'";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
 echo '<script>alert("Work Updated Successfully!")</script>';
        echo '<script>windows: location="my_activity.php"</script>';
}
else 
{
 echo '<script>alert("Failled to update WOrk!")</script>';
        echo '<script>windows: location="my_activity.php"</script>';
}
}






?>