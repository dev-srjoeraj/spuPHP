<?php

	##Read the roll number and name from the user.
	#Roll number must be an integer from 1-59.
	#Name must begin with the letters "an".
	#Generate individual error messages.

	$roll_no = $_GET["tbox1"];
	$name = $_GET["tbox2"];
	$range_starts_from = 1 ;
	$range_ends_at = 59 ;

	if(is_numeric($roll_no)){
		if($roll_no >= $range_starts_from && $roll_no <= $range_ends_at) echo(" $roll_no lies in the range of $range_starts_from - $range_ends_at<br>");
		else echo("The roll number is out of range<br>");

	}else echo("Invalid Roll number<br>");

	if(substr($name,0,2) == "an") echo ("The name begins with letter 'an'");
	else echo("The name does not begin with the letters 'an'");
	
?>