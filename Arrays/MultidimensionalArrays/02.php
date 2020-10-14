<?php

	## Storing 3 details of students in seprately in an Array using the concept of multidimensional arrays(Associative Arrays).

	$slist = array(
		array("name"=>$_GET["tbox1"], 
			"class"=>$_GET["tbox2"], 
			"age"=>$_GET["tbox3"], 
			"gender"=>$_GET["tbox4"], 
			"blg"=>$_GET["tbox5"]
		),

		array("name"=>$_GET["stbox1"], 
			"class"=>$_GET["stbox2"], 
			"age"=>$_GET["stbox3"], 
			"gender"=>$_GET["stbox4"], 
			"blg"=>$_GET["stbox5"]
		),

		array("name"=>$_GET["ttbox1"], 
			"class"=>$_GET["ttbox2"], 
			"age"=>$_GET["ttbox3"], 
			"gender"=>$_GET["ttbox4"], 
			"blg"=>$_GET["ttbox5"]
		)

		
	);
	
	echo("<h3>Details For the First Student</h3>");
	echo "Name : ".$slist[0]["name"]."<br>";
	echo "Class : ".$slist[0]["class"]."<br>" ;
	echo "Age : ".$slist[0]["age"]."<br>" ;
	echo "Gender : ".$slist[0]["gender"]."<br>";
	echo "Blood Group :". $slist[0]["blg"]."<br>";
	
	echo("<h3>Details For the Second Student</h3>");
	echo "Name : ".$slist[1]["name"]."<br>";
	echo "Class : ".$slist[1]["class"]."<br>" ;
	echo "Age : ".$slist[1]["age"]."<br>" ;
	echo "Gender : ".$slist[1]["gender"]."<br>";
	echo "Blood Group :". $slist[1]["blg"]."<br>";

	echo("<h3>Details For the Second Student</h3>");
	echo "Name : ".$slist[2]["name"]."<br>";
	echo "Class : ".$slist[2]["class"]."<br>" ;
	echo "Age : ".$slist[2]["age"]."<br>" ;
	echo "Gender : ".$slist[2]["gender"]."<br>";
	echo "Blood Group :". $slist[2]["blg"]."<br>";

	


?>