<?php
include('security.php');
$con = mysqli_connect("localhost","root","","adminpanel");
// sent by ajax from assign.js for returning suppervisors
if(isset($_POST['departID'])){
	$dapartID = $_POST['departID'];
	
	//get free supervisors 
	$supervisor = mysqli_query($con,"SELECT id,fname,surname,totalStudents FROM supervisor WHERE departID=$dapartID AND totalStudents<6")or die("prob with supervisor ");
	if(mysqli_num_rows($supervisor)<1){
		//echo "No Free supervisors";
		echo json_encode(10);
	}else{
		$superArray = array();
		while($row = mysqli_fetch_array($supervisor)){
			$superData = $row['id']."_".$row['fname']." ".$row['surname']." -> ".$row['totalStudents']." Students";
			//Append array with new items
			array_push($superArray,$superData);
		}
		echo json_encode($superArray);
	}
}

//for checking reg 
if(isset($_POST['reg'],$_POST['dID'])){
	$reg = $_POST['reg'];
	$departID = $_POST['dID'];
	
	$sudentData = mysqli_query($con,"SELECT regno,internStatus,departID FROM student WHERE regno='$reg' LIMIT 1")or die("prob with student ");
	
	if(mysqli_num_rows($sudentData)<1){
		//echo "Reg not found";
		echo "20";
	}else{
		while($row = mysqli_fetch_array($sudentData)){
			$internStatus = $row['internStatus'];
			$dptID = $row['departID'];
		}
		if ($internStatus == 1){
			//echo "student assigned";
			echo "21";
		}else if ($dptID !=$departID){
			//echo "student doesnt belong to the selected department";
			echo "22";
		}else{
			//echo "student free";
			echo "23";
		}
	}
		
}

//for assigning student to supervisor 
if(isset($_POST['nReg'],$_POST['nDID'],$_POST['supID'])){
	$regNo = $_POST['nReg'];
	$departID = $_POST['nDID'];
	$supID = $_POST['supID'];
	
	
	
	//updating studen internStatus and supervisorID
	mysqli_query($con,"UPDATE student SET internStatus=1,supervisorID = $supID WHERE regno = '$regNo'")or die("prob with updating student data");
 
	//updting supervisor totalStudents 
	mysqli_query($con,"UPDATE supervisor SET totalStudents=totalStudents+1 WHERE  id = $supID ")or die("prob with updating supervisor data");
	
	
	
	mysqli_query($con,"INSERT INTO assigned (username,regno,depart) VALUES ('$supID','$regNo','$departID')")or die("prob with updating supervisor data");


	
	
	
	
	echo "Congz student ".$regNo." has been assigned a supervisor";
}


?>