<?php
	
	##To check whether the string is uppercase or not.

	$string=$_GET["tbox1"];
	$string_uppercase=strtoupper($string);
	
	if($string==$string_uppercase){
		echo("The following string is in uppercase");
	}else {
		echo("The following string is not in uppercase");
	}

?>