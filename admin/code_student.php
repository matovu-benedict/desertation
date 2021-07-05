<?php





include('security.php');
$connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['submit']))
{
   $fname      =    $_POST['fname'];
   $surname    =    $_POST['surname'];
   $regno     =    $_POST['regNo'];
   $phone      =    $_POST['phone'];
   $email      =    $_POST['email'];
   $username   =    $_POST['username'];
   $password   =    $_POST['password'];
   $cpassword  =    $_POST['cpassword'];
   $gender    =    $_POST['gender'];
   $department =    $_POST['department'];

if($password === $cpassword)
{
//get depart name 
$dName = mysqli_query($connection,"SELECT departmentName FROM departments WHERE departmentID = $department");
while($row = mysqli_fetch_array($dName)){
	$departName = $row['departmentName'];
}

$query = "INSERT INTO student (fname,surname,regno,phone,email,username,password,cpassword,gender,departID,departName) VALUES ('$fname','$surname','$regno','$phone','$email','$username','$password','$cpassword','$gender',$department,'$departName')";
$query_run = mysqli_query($connection, $query);


if($query_run)
{

 echo '<script>alert("New record created successfully !")</script>';
        echo '<script>windows: location="a_student.php"</script>';
}
else
{
 echo '<script>alert("Student already exists")</script>';
        echo '<script>windows: location="a_student.php"</script>';
}

}


}


 

if(isset($_POST['updatebtn']))
{
$regno       =  $_POST['regno'];
$username =  $_POST['edit_username'];
$email    =  $_POST['edit_email'];
$phone    =  $_POST['edit_phone'];
$password =  $_POST['edit_password'];


$query = "UPDATE student SET username='$username',email='$email',phone='$phone',password='$password' WHERE regno='$regno'";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
echo '<script>alert("Student Updated successfully !")</script>';
        echo '<script>windows: location="view_student.php"</script>';
}
else
{
 echo '<script>alert("Failled to update!")</script>';
        echo '<script>windows: location="view_student.php"</script>';
}

}









////delete btn
if(isset($_POST['deletebtn']))
{
$regno = $_POST['regno'];


$query = "DELETE  FROM student WHERE regno='$regno' ";
$query_run = mysqli_query($connection, $query);

if($query_run)
{
 echo '<script>alert("Data deleted successfully !")</script>';
        echo '<script>windows: location="view_student.php"</script>';
}
else 
{
 echo '<script>alert("No data deleted !")</script>';
        echo '<script>windows: location="view_student.php"</script>';
}
}

if(isset($_POST['submit'])) {
$youremail = $_POST['email'];
$fromsubject = 'Registration successfully ';



$fname = $_POST['fname'];
$surname = $_POST['surname'];


$name = ''.$fname.' '.$surname.'';
$mail = $_POST['email'];


$regNo = $_POST['regNo'];
$password = $_POST['password'];

$subject = 'Registration successfully ';
$message = 'you have been regestered successfully to umu internship system.This is your REGNO: '.$regNo.' And PASSWORD: '.$password.''; 


$to = $youremail; 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type:text/html; charset=UTF-8' . "\r\n";
$headers .= "From: ".$_POST['name']."<".$_POST['email'].">\r\n"; 
$headers .= "Reply-To: ".$_POST["email"]."\r\n";
$mailsubject = 'Messsage recived for'.$fromsubject.' Contact Page';
$body = $fromsubject.'
	
	The person that contacted you is  '.$name.'
	 E-mail: '.$mail.'
	 Subject: '.$subject.'
	
	 Message: 
	 '.$message.'	
	|---------END MESSAGE----------|'; 
	
								
								
								mail($to, $subject, $body,$headers);
 } else { 
 

}

?>





