<?php
	
	## To check whether a number is Possitive, Negative or Zero.
	
	$number = $_GET["tbox1"];
	if(is_numeric($number)){
		if($number > 0) echo("Possitive");
		elseif($number < 0) echo ("Negative");
		else echo ("Zero");
	}else echo("Invalid Input.Please Enter a number.");

?>