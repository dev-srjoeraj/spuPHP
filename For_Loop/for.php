<?php
	
	## Display a piece of text as much as you want.
	

	$text = $_GET["tbox1"];
	$no_of_times = 6;

	for($i=1; $i<=$no_of_times; $i++){
		echo(" $text --($i)<br>");
	}
?>