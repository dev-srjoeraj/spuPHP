<?php

	#Perform all arithmetic operations on 2 numbers(+,-,/,*,%).
	$num1 = $_GET["tbox1"];
	$num2 = $_GET["tbox2"];

	if(is_numeric($num1) && is_numeric($num2)) {
		
		$add = $num1+$num2;
		$minus = $num1-$num2;
		$mul = $num1*$num2;
		$divide = $num1/$num2;
		$mod1 = $num1%5;
		$mod2 = $num2%5;

		echo("Arithemetic Operations<br>");
		echo("Addition : $add <br> ");
		echo("Multiplication : $mul <br> ");
		echo("Division : $divide <br> ");
		echo("Subtraction : $minus <br> ");
		echo("Mod(5) of $num1 : $mod1 <br> ");
		echo("Mod(5) of $num2 : $mod2 <br> ");

	}else echo ("Invalid Input!");
?>