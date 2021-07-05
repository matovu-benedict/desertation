<?php

include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

////delete btn
if(isset($_POST['unassignx']))
{
$regNo = $_POST['regNo'];


$query = "DELETE  FROM assigned WHERE regno='$regNo' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
 echo '<script>alert("Student unassigned successfully !")</script>';
        echo '<script>windows: location="assigned.php"</script>';
}
else 
{
 echo '<script>alert("Failled to unassign !")</script>';
        echo '<script>windows: location="assigned.php"</script>';
}
}



?>














