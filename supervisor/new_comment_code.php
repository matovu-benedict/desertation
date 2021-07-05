<?php

include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['add']))
{	 
	 $comment = $_POST['comment'];
	 $date = $_POST['date'];
	 $regno = $_POST['regno'];
	 $supervisorId = $_POST['supervisorID'];
	 $sql = "INSERT INTO comment (comment, date, regno,supervisorId) VALUES ('$comment', '$date', '$regno','$supervisorId')";
	 if (mysqli_query($connection, $sql)) {
		
		
		
		 echo '<script>alert("New comment created successfully !")</script>';
        echo '<script>windows: location="new_comment.php"</script>';
		
	 } else {
		echo "Error: " . $sql . "
		
		
		
" . mysqli_error($connection);
	 }
	 mysqli_close($connection);
}
?>