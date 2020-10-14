<?php

	##Read the gender (Male, Female) from the  user. Print "Hello Sir" / "Hello Madam" or "Wrong Input" based on entry.
	$gender=$_GET["tbox1"];
	$gender = strtolower($gender);
	if($gender != "f" && $gender != "m"){
		echo("Wrong input!.");
	}else {
		if($gender == "m") echo("Hello Sir");
		if($gender == "f") echo ("Hello Madam");
	}
?>