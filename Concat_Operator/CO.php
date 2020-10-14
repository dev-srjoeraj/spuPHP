<?php

	#Read the Roll number, Student Name, Class, Date of Birth from the user (using textboxes only). Use a single echo() to display all the values in the following format:
	#Roll No: ______
	#Student Name: ________
	#Class: ________
	#Date of Birth: ________
	

	$r_no = $_GET["tbox1"];
	$s_name = $_GET["tbox2"];
	$class = $_GET["tbox3"];
	$dob = $_GET["tbox4"];

	echo ("Roll No: $r_no<br>Student Name: $s_name<br>Class: $class <br>Date of Birth: $dob");
?>