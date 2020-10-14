<?php
	#Read the RollNumber, Studentname, DateofBirth from the user.
	#Check: (generate individual messages)

	$roll_no = $_GET["tbox1"];
	$student_name= trim($_GET["tbox2"]);
	$date = $_GET["tbox3"];

	## Rollnumber --> between 1-59, integer
	
	if(is_numeric($roll_no)){
		if($roll_no >= 1 && $roll_no <=59) echo ("Roll number lies in range.");
		else echo("Roll number is out of range.");
	}else echo("Please enter a number");

	echo("<br>");
	
	#Studentname --> All alphabets only
	
	$alphabets_only = 0;
	if(strlen($student_name) != 0){

		for($i=0; $i<strlen($student_name); $i++) {
			
			$ascii = ord(substr($student_name, $i, 1));

			if(!($ascii>=65 && $ascii<=90 || $ascii>=97 && $ascii<=122)){

				echo("Your name cannot contain any characters except alphabets");
				$alphabets_only = 1;
				break;
			}
		}

		if($alphabets_only == 0) echo ("Name Validation Success");

	} else echo("Please enter a Name.");

	echo("<br>");

	#Date of birth --> Past date
	
	echo(strlen($date) . "<br>");

	if(strlen($date) != 0 ) {

		if(strtotime($date) < time()) 
			echo "The date is a past date.";
		else 
			echo "The date is not a past date.";
	}else 
		echo("please enter a valid date.");
	
	

	

?>