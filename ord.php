<?php
	
	## To check whether the following two strings  begin with the same charcter or not.
	$string1=$_GET["tbox1"];
	$string2=$_GET["tbox2"];

	#ord() function returns the ASCII code of the first charcter in the string.
	$ord_of_string1 = ord($string1);
	$ord_of_string2 = ord($string2);

	if($ord_of_string1 == $ord_of_string2) {
		echo ("The strings begin with the same character.");
	}else {
		echo ("The strings do not begin with the same character.");
	}
?>