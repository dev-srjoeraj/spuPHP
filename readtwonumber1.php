<html>
<head><title>Results</title></head>
</body>
<?php

	echo("You are currently here!<br>");
	echo "This " , "is ", "a ", "string ", "with " , "multiple " , "parenthesis <br>"  ;
	$num1 = $_GET["text1"];
	$num2 = $_GET["text2"];
	$addition = $num1 + $num2;
	$subtraction = $num1 - $num2;
	$product = $num1 * $num2;
	$division = $num1 / $num2;

	if(is_numeric($num1) && is_numeric($num2)) {
		echo("Arithemetic  Calculations <br>");
		echo("Addition = $addition<br>");
		echo("Subtraction = $subtraction <br>");
		echo("Product = $product <br>");
		echo("Division = $division <br> ");
	} else {
		echo("Please enter a number");
	}
	
?>
</body>
</html>
