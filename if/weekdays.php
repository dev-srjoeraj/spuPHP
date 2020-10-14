<?php

	##Read the weekday name (sun, mon,...,sat) from the user (using HTML) and print the relevant weekday full name (sunday,...) upload only php file.

	$day = $_GET["tbox1"];
	if($day == "sun") echo ("Sunday");
	elseif($day == "mon") echo ("Monday");
	elseif($day == "tue") echo ("Tuesday");
	elseif($day == "wed") echo ("Wedmesday");
	elseif($day == "thu") echo ("Thursday");
	elseif($day == "fri") echo ("Friday");
	elseif($day == "sat") echo ("Saturday");
	else echo "Invalid Input!";
?>