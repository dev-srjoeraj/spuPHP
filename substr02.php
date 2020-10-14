<html>
<head><title>To check whether a string starts and end's with the same charcter or not.</title></head>
<body>
	<?php

		## To check whether a string starts and end's with the same charcter or not.
		$string = "Amritsar is  a city in Punjab India";
		$firstChar = substr($string,0,1);
		$lastChar = substr($string,-1,1);
		
		if($firstChar == $lastChar) {
			echo("The string starts and end's with the same charcter");
		} else {
			echo("The string does not start and end's with the same charcter");
		}
	?>
</body>
</html>