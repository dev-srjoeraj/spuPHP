<html>
<head><title> Linking Test PHP </title></head>
<body>
<?php
	echo("You are currently in basic.php");
	$text1=$_GET["tbox1"];
	$text2=$_GET["tbox2"];
	
	if (is_numeric($text1) && is_numeric($text2)) 
	{
		echo
	}

	else 
	{
		echo $text1 + $text2 ;
	}
?>
</body>
</html>
