<?php

	##Read a number from the user. Check whether it is in the range of 1-59 roll numbers or not.

	$roll_no = $_GET["tbox1"];
	$range_starts_from = 1 ;
	$range_ends_at = 59 ;

	if(is_numeric($roll_no)){
		if($roll_no >= $range_starts_from && $roll_no <= $range_ends_at) echo(" $roll_no lies in the range of $range_starts_from - $range_ends_at");
		else echo("The roll number is out of range");

	}else echo("Invalid Roll number");
	
?>