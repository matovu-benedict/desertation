<?php

include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['add']))
{	 
	 $fname = $_POST['fname'];
	 $lname = $_POST['lname'];
	 $email = $_POST['email'];
	 $cname = $_POST['cname'];
	 $contact = $_POST['contact'];
	  $regno = $_POST['regno'];
	 $supervisorID = $_POST['supervisorID'];
	 $sql = "INSERT INTO company (fname, lname,email,cname,contact,regno,supervisorID) VALUES ('$fname', '$lname', '$email', '$cname', '$contact', '$regno', '$supervisorID')";
	 if (mysqli_query($connection, $sql)) {
		
		
		
		 echo '<script>alert("New record created successfully !")</script>';
        echo '<script>windows: location="placement.php"</script>';
		
	 } else {
		echo "Error: " . $sql . "
		
		
		
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
}
?>