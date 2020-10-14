<?php

	##Store a string in a variable. Print the length of this string. Concatenate " Hello" string (with a leading space) to the original string and print the new string and its length.

	$string=$_GET["tbox1"];
	$length_of_the_string = strlen($string);
	echo("The length of the string is $length_of_the_string <br>");
	$string=" Hello $string";
	echo("The new string is $string<br>");
	$length_of_the_string = strlen($string);
	echo("The length of the new  string is $length_of_the_string");
?>