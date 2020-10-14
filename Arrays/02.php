<?php

	## Storing 3 details of a student in arrays and displaying them.

	$name = $_GET["tbox1"];
	$class = $_GET["tbox2"];
	$age = $_GET["tbox3"];
	$gender = $_GET["tbox4"];
	$b_group = $_GET["tbox5"];

	$name_1 = $_GET["stbox1"];
	$class_1 = $_GET["stbox2"];
	$age_1 = $_GET["stbox3"];
	$gender_1 = $_GET["stbox4"];
	$b_group_1 = $_GET["stbox5"];

	$name_2 = $_GET["ttbox1"];
	$class_2 = $_GET["ttbox2"];
	$age_2 = $_GET["ttbox3"];
	$gender_2 = $_GET["ttbox4"];
	$b_group_2 = $_GET["ttbox5"];


	$details_1 = array($name_1, $class_1, $age_1, $gender_1, $b_group_1);
	$details_2 = array($name_2, $class_2, $age_2, $gender_2, $b_group_2);
	$details = array($name, $class, $age, $gender, $b_group);

	
	echo("<h3>Details For the First Student</h3>");
	echo("Name : $details[0]<br>");
	echo("Class : $details[1]<br>");
	echo("Age : $details[2]<br>");
	echo("Gender : $details[3]<br>");
	echo("Blood Group : $details[4]<br>");

	echo("<h3>Details For the Second Student</h3>");
	echo("Name : $details_1[0]<br>");
	echo("Class : $details_1[1]<br>");
	echo("Age : $details_1[2]<br>");
	echo("Gender : $details_1[3]<br>");
	echo("Blood Group : $details_1[4]<br>");

	echo("<h3>Details For the Third Student</h3>");
	echo("Name : $details_2[0]<br>");
	echo("Class : $details_2[1]<br>");
	echo("Age : $details_2[2]<br>");
	echo("Gender : $details_2[3]<br>");
	echo("Blood Group : $details_2[4]<br>");



?>