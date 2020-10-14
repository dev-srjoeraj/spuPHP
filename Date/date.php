<?php
	
	##Date 
	# d - represents the day of the month (01 to 31)
	# m - represents a month (01 to 12)
	# Y - represents a year 
	# l - represents the day of the week.
	echo("<h3>Get a Date</h3>");
	echo "Today is " . date("Y/m/d") . "<br>" ;		
	echo "Today is " . date("Y.m.d") . "<br>" ;
	echo "Today is " . date("Y-m-d") . "<br>" ;
	echo "Today is " . date("l") . "<br>" ;




	#strtotime()
	echo("<h4>strtotime()</h4>");
	echo("Today: " . strtotime("now"). "<br>");
	echo("Yesterday: " . strtotime("-1 days") . "<br>");
	echo("Next Monday: " . strtotime("next Monday") . "<br>");
	echo("Previous Monday: " . strtotime("last Monday") . "<br>");
	
	#Creating date using strtotime()
	echo("<h3>Creating a date using strtotime()</h3>");
	$custom_date = strtotime("12:45pm March 13 2024");
	echo "Created date is " . date("d-m-Y h:i:sa", $custom_date); 
	




?>