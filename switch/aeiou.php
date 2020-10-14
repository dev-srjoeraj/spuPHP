<?php

	#Read the alphabet (a,e,i,o,u - lowercase only allowed, uppercase will be considered out of set). If it is from the given set, print any word beginning with that alphabet. For all other alphabets (including uppercase vowels), generate ERROR message.

	$char = $_GET["tbox1"];
	if(strlen($char) != 1) echo ("Please enter a single character only.");
	else {
		switch($char){
			case "a" : 
				echo("Asia");
				break;
			case "e" : 
				echo("Europe");
				break;
			case "i" : 
				echo("India");
				break;
			case "o" : 
				echo("Oslo");
				break;
			case "u" : 
				echo("Uganda");
				break;
			default :
				echo("The charcater is not a Lowercase Vowel");
		}
	}	
?>