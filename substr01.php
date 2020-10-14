<html>
<head><title>To check whether the charcter begins with "TY" or not</title></head>
<body>
	<?php
		## To check whether the charcter begins with "TY" or not
		
		$string1="TYITM";
		$firstAndSecondLetters = substr($string,0,2);
		if ($firstAndSecondLetters = "TY") {
			echo("The String begins with TY");
		} else {
			echo("The String does not begin with TY");
		}
	?>
</body>
</html>