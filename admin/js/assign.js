$(document).ready(function(){
	//set supervisors dropdown to default on page load
	var string="";
	string=string+"<option value='noData'>Please Select Supervisors</option>";
	document.getElementById("output").innerHTML=string;

	$("#depart").change(function(){
		var string="";
		//set supervisors dropdown to default 
		string=string+"<option value='noData'>Please Select Supervisors</option>";
		document.getElementById("output").innerHTML=string;

			
		var depart = document.getElementById("depart");
		
		if (depart.selectedIndex ==0){
			alert("Please select department");
		}else{
			var departID = depart.value;
		
			$.ajax({
				url: "code_assign.php",
				type: "POST",
				dataType:"json",
				data: {departID:departID},
				success: function (phpReturn){
					if (phpReturn == 10){
						alert("No Free supervisors");
					}else{
						var string="";
						var superData = phpReturn;
						
						for(i=0;i<superData.length;i++){
							var splitedData = superData[i].split("_");
							var superName = splitedData[1];
							var superID = splitedData[0];
							string=string+"<option value="+superID+">"+superName+"</option>";
						}
						
						document.getElementById("output").innerHTML=string;
					}
					
				}
			});	
		}
	  
	});
	
	//assignForm
	$("#assignForm").on('submit', (function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		
		var reg     = assignForm.reg.value;
        var depart     = assignForm.depart;
        var sup    = assignForm.supervisors;
		var dID = depart.value;
	
		if (reg ==""){
			alert("Please enter registration number");
		}else if (depart.selectedIndex ==0){
			alert("Please select Department");
		}else if (sup.value =="noData"){
			alert("Please select Supervisors");
		}else{
			//check if regNumber exists and is not assigned to any supervisors
			$.ajax({
				url: "code_assign.php",
				type: "POST",
				data: {reg:reg,dID:dID},
				success: function (phpReturn){
					if(phpReturn == 20){
						alert("Invalid Registration number");
					}else if(phpReturn == 21){
						alert("Student is already assigned a supervisor");
					}else if(phpReturn == 22){
						alert("Student  does not belong to the selected department");
					}else if(phpReturn == 23){
						//call function to assign student
						assignStudent();
					}
				}
			});	
			
			//asign student 
			function assignStudent(){
				var nReg = reg;
				var nDID = dID;
				var supID = sup.value;
				$.ajax({
					url: "code_assign.php",
					type: "POST",
					data: {nReg:nReg,nDID:nDID,supID:supID},
					success: function (data){
						alert(data);
						//page refresh
						window.location.replace("assign.php");
					}
				});	
			}
		}
	
	}));

});