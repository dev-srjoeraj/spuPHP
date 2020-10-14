<?php

	## Storing details of a student in an array and displaying them.

	$name = $_GET["tbox1"];
	$class = $_GET["tbox2"];
	$age = $_GET["tbox3"];
	$gender = $_GET["tbox4"];
	$b_group = $_GET["tbox5"];

	$details = array($name, $class, $age, $gender, $b_group);

	echo("Name : $details[0]<br>");
	echo("Class : $details[1]<br>");
	echo("Age : $details[2]<br>");
	echo("Gender : $details[3]<br>");
	echo("Blood Group : $details[4]<br>");


?>