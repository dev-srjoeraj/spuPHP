<?php

	## Storing 3 details of students in seprately in an Array using the concept of multidimensional arrays(Regular Arrays).

	$slist = array(
		array($_GET["tbox1"], $_GET["tbox2"], $_GET["tbox3"], $_GET["tbox4"], $_GET["tbox5"]),
		array($_GET["stbox1"], $_GET["stbox2"], $_GET["stbox3"], $_GET["stbox4"], $_GET["stbox5"]),
		array($_GET["ttbox1"], $_GET["ttbox2"], $_GET["ttbox3"], $_GET["ttbox4"], $_GET["ttbox5"])
	);
	
	echo("<h3>Details For the First Student</h3>");
	echo "Name : ".$slist[0][0]."<br>";
	echo "Class : ".$slist[0][1]."<br>" ;
	echo "Age : ".$slist[0][2]."<br>" ;
	echo "Gender : ".$slist[0][3]."<br>";
	echo "Blood Group :". $slist[0][4]."<br>";
	
	echo("<h3>Details For the Second Student</h3>");
	echo "Name : ".$slist[1][0]."<br>";
	echo "Class : ".$slist[1][1]."<br>" ;
	echo "Age : ".$slist[1][2]."<br>" ;
	echo "Gender : ".$slist[1][3]."<br>";
	echo "Blood Group :". $slist[1][4]."<br>";

	echo("<h3>Details For the Third Student</h3>");
	echo "Name : ".$slist[2][0]."<br>";
	echo "Class : ".$slist[2][1]."<br>" ;
	echo "Age : ".$slist[2][2]."<br>" ;
	echo "Gender : ".$slist[2][3]."<br>";
	echo "Blood Group :". $slist[2][4]."<br>";
	
	


?>