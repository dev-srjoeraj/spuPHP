<?php

	##Read the dept code (adm, mkt, fin, sal) and display the full department name (Administration, Marketing, Finance, Sales). If there is a wrong code entered, generate an alert message to the user.

	$dep = $_GET["tbox1"];
	if($dep == "adm") echo ("Adminstration");
	elseif($dep == "mkt") echo ("Marketing");
	elseif($dep == "fin") echo ("Finance");
	elseif($dep == "sat") echo ("Sales");
	else echo "Invalid Input!";
?>