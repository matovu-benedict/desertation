<?php session_start();
if(isset($_POST['submit'])) {
$youremail = 'emetack@gmail.com';
$fromsubject = 'Contact From Emetack Report 1.0';
$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['subject']; 
$message = $_POST['message']; 
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
	
echo '<script>alert("Your Message is Successful Sent. We Shall Soon Get Back To You")</script>';
echo "<script>windows: location='index.php'</script>";									
								
								mail($to, $subject, $body,$headers);
 } else { 
 
echo '<script>alert("Your Message is Failed. Please Check Your Internet Connection & Send New Message")</script>';
echo "<script>windows: location='contact.php'</script>";	
}
?> 
