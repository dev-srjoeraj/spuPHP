<html>
<head><title>To check whether a string contains a specific charcter at a specific position or not.</title></head>
<body>
	<?php

		## To check whether a string contains a specific charcter at a specific position or not.

		$string = "dev-srjoeraj";
		$position = 5 ;
		$charcterToCheck = "r";
		
		if(substr($string,$position,1) == $charcterToCheck) {
			echo("The string : '$string' contains the charcter : '$charcterToCheck' in the $position position.");
		} else {
			echo("Did not achieve the desired result.");
		}

	?>
</body>
</html>