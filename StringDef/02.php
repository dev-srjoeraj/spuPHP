<?php
	
	##Read a string and count how many alphabet, digit, spaces, punctuations.Print the counts separaterly.

	$string = $_GET["tbox1"];
	$count_alpha = 0;
	$count_digits = 0;
	$count_spaces = 0;
	$count_punc = 0;
	$count_spec = 0;

	for($i=0; $i<strlen($string); $i++){
	
		$ascii=ord($string[$i]);
		
		if($ascii>=65 && $ascii<=90 || $ascii>=97 && $ascii<=122) $count_alpha++;
		elseif($ascii>=48 && $ascii<=57) $count_digits++;
		elseif($ascii == 32) $count_spaces++;
		elseif($ascii == 46 || $ascii == 63 || $ascii == 44 ||$ascii == 44 || $ascii == 58 || $ascii == 59 || $ascii == 33 || $ascii == 34) $count_punc++;
		else $count_spec++;

	}

	#Printing results.
	echo "$count_alpha Alpahbets <br>";
	echo "$count_digits Numbers <br>";
	echo "$count_spaces Spaces <br>";
	echo "$count_punc Punchuations (Which Includes Full Stop, Question Mark, Commas, Colons, Semi-Colons; Exclamation Marks, Quotation Marks)<br>";
	echo "$count_spec Special Characters <br>";

?>