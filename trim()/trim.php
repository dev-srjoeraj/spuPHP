<?php
	##Read the First Name and Last Name from user. Trim both the strings and join them in a new variable and print thsi concatenated new string in the format FIRSTNAME.LASTNAME.

	## trim() function removes charcters from sides of a string.

	$first_name=$_GET["tbox1"];
	$last_name=$_GET["tbox2"];

	$first_name = trim($first_name);
	$last_name = trim($last_name);

	$formated_name = "$first_name.$last_name";
	echo($formated_name);
	
?>