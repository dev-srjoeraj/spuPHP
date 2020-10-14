<?php
	###Read the Book Id, Book Name, Price, Date of Publication, Student Id from the user.
	#Check: (generate individual messages)
	
	$book_id = $_GET["tbox1"];
	$book_name = trim($_GET["tbox2"]);
	$price = $_GET["tbox3"];
	$dOP = $_GET["tbox4"];
	$student_id = $_GET["tbox5"];

	##Book Id is a possitive integer.
	# I am considering that floats are not allowed.
	# It's pretty obvious that book id cannot be negative.

	if($book_id == ceil($book_id) && $book_id > 0) echo("Valid Book Id");
	else echo("The Book Id is invalid.");
	echo("<br>");
	##Book Name consists of alphabets and spaces only.

	$is_bookName = 0;
	for($i=0; $i<strlen($book_name); $i++) {
		$ascii = ord($book_name[$i]);
		if(!($ascii>=65 && $ascii<=90 || $ascii>=97 && $ascii<=122 || $ascii == 32)){
			echo("The book name can only contain alphabets and spaces.");
			$is_bookName =1;
			break;
		}
	}

	if(strlen($book_name) == 0) echo ("Please enter the name of the book.");
	if($is_bookName == 0) echo("The book name is valid");
	echo("<br>");

	## Price at least be 50 paise.
	# 1 ruppe  = 100 paise.

	$decimal_value = $price -floor($price);
	$paise = $decimal_value * 1000;
	
	if($paise > 99){
		if($price >= 0.50) echo("The amount entered is validated.");
		else("Please enter an amount greater than 50 paise.");
	}else echo("Please enter a proper price.");

	echo("<br>");

	#Technically this is not a part of the question but if the user enters 
	#an amount of paise more than 100 (for ex 132.222) than the actural amount here
	# is 134.22.Further its quite obvious that 123.011 is an invalid value.
	#The solution works only upto 3 decimal spaces.

	#if($paise >99){
	#	$increment = $paise / 100 ;
	#	$price = floor($price);
	#	$price += $increment;
	#}else echo("Please enter a proper price");

	#echo("The price of the book is " . $price);

	##Date of Publication is before 2000

	$date_before_2000 = strtotime("1 Jan 2000");
	if(strtotime($dOP) < $date_before_2000 && strlen($dOP) != 0 ) 
		echo("The Publication year is valid.");
	elseif(strlen($dOP) == 0) echo("Please enter a Date.");
	else echo("The Publication year must be before 2000.");

	echo("<br>");
	##Student must be in the format "99ITM999" where 9 is any digit between 0 -9.

	$first_two = substr($student_id, 0, 2);
	$last_three = substr($student_id,5,3);
	
	if(strlen($student_id) == 8 && is_numeric($first_two) && is_numeric($last_three)
	&& substr($student_id,2,3) == "ITM") 
		echo ("The roll number is valid.");
	elseif(strlen($student_id) == 0) 
		echo("Please enter a roll number.");
	else 
		echo("The entered roll number is invalid.");
	
?>