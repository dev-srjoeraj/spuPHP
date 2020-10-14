<?php

	##Read 2 numbers from the user and check whether the first number is greater than the second number or not. Display an appropriate message.
	
	$num1 = $_GET["tbox1"];
	$num2 = $_GET["tbox2"];

	if(is_numeric($num1) && is_numeric($num2)) {
		if($num1 > $num2) echo("$num1 is greater than $num2");
		elseif($num1 < $num2) echo("$num2 is greater than $num1");
		else echo("Both numbers are equal");
	}else echo ("Invalid Input!");
?>