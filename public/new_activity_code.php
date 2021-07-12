<?php

include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['add']))
{	 
	 $work = $_POST['work'];
	 $date = $_POST['date'];
	 $regno = $_POST['regno'];
	 $supervisorID = $_POST['supervisorID'];
	 $sql = "INSERT INTO activity (work, date, regno,supervisorID) VALUES ('$work', '$date', '$regno', '$supervisorID')";
	 if (mysqli_query($connection, $sql)) {
		
		
		
		 echo '<script>alert("New record created successfully !")</script>';
        echo '<script>windows: location="new_activity.php"</script>';
		
	 } else {
		echo "Error: " . $sql . "
		
		
		
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
}
?>