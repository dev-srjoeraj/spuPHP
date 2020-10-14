<?php

	$string1 = $_GET["tbox1"];
	$string2 = $_GET["tbox2"];
	#$string1 = trim($string1);
	#$string2 = trim($string2);

	# Printing the larger string.(The string are trimmed here.)
	if(strlen($string1) != strlen($string2)){
		if(strlen($string1) > strlen($string2)) echo("The first String is bigger than the second.");
		else echo("The second string is large than the second string.");
	} else echo ("The two strings are equal.");

	echo("<br>");

	#Print which string begins with a larger character character (in terms of ascii 'a' is larger than 'A' because 97>65)
	
	if(ord($string1) > ord($string2)) echo("The first string starts with a charcter having a higher ASCII value wrt second string.");
	elseif(ord($string1) < ord($string2)) echo("The second string starts with a charcter having a higher ASCII value wrt first string.");
	else echo("The both string's first charcters are the same thus have the same ascii value.");

	echo("<br>");

	## check which string has the largest number of vowels (both uppercase and lowercase)
	## This can be solved using various methods easily.

	# using arrays

	$vowels_list = array('a','e','i','o','u','A','E','I','O','U');
	$vcount1 = 0;
	$vcount2 = 0;
	
	for($i=0; $i<strlen($string1); $i++) 
		if(in_array($string1[$i], $vowels_list)) $vcount1++;

	for($i=0; $i<strlen($string2); $i++) 
		if(in_array($string2[$i], $vowels_list)) $vcount2++;
	
    if($vcount1 > $vcount2) echo("The first string contains more vowels.");
    elseif($vcount1 < $vcount2) echo("The second string contains more vowels.");
    else echo("Both strings have the same vowel count.");


?>