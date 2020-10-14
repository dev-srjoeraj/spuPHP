<?php

	###Read the Student details (rollno, studentname, dateofbirth, class(dropdown), gender(radio)) from the user.
	
	$class = $_GET["dropDown"];
	$gender = $_GET["radio"];
	$str_dOB = strtotime($_GET["tbox3"]);
	$dOB = date("d-m-Y",$str_dOB);
	$rollNo = $_GET["tbox1"];
	$sName = $_GET["tbox2"];

	$isValid = false ;

	# Roll no must be a possitive number.
	if(is_numeric($rollNo) && $rollNo > 0) $isValid = true;
	else echo("Please enter a valid roll number<br>");

	#Student name must only contain only alphabets and spaces.
	for($i=0; $i<strlen($sName);$i++){
		$ascii = ord($sName[$i]);
		if(!($ascii>=65 && $ascii<=90 || $ascii>=97 && $ascii<=122 || $ascii == 32)){
			echo("Your name must only contain alphabets and spaces.<br>");
			$isValid= false;
		}
	}
	#Date of birth must be a past date.
	if(strlen($dOB) == 0){
		echo("Please enter a Date.<br>");
		$isValid = false;
	}
	elseif(!(strtotime($dOB) > strtotime(date()))){
		$isValid = false;
		echo("Please enter a past date.<br>");
	}  

	#Displaying the result(tabular form) if all values are validated succesfully.
	if($isValid){
		echo("<table border='1'>
			<tr>
				<th>Roll No</th>
				<th>Student Name</th>
				<th>Birth Date</th>
				<th>Class</th>
				<th>Gender</th>
			</tr>
			<tr>
				<td>$rollNo</td>
				<td>$sName</td>
				<td>$dOB</td>
				<td>$class</td>
				<td>$gender</td>
				
			</tr>
			</table>");
	}
	else echo("Please fill all the details correctly.");

?>