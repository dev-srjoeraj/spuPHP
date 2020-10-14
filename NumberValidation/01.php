<?php

	##Read 2 numbers. Both the numbers must be even integer numbers between 1-10 (incl.). The first number must be smaller than the second one.

	$num1 = $_GET["tbox1"];
	$num2 = $_GET["tbox2"];

	if(is_numeric($num1) && is_numeric($num2) && $num1 % 2 == 0 && $num2 % 2 == 0){
		if($num1 < $num2) echo("The first number is smaller than the second one.");
		else echo("Please make sure that the first number is smaller than the second number.");
	} else echo("Please enter even numbers");
	
?>