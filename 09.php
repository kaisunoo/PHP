<!DOCTYPE html>
<html>
<body>
	<?php
	/*GROUP 1 - A function that the given string of space separated numbers, 
	and have to return the highest and lowest number.*/
	function max_n_min($randnum){
		$string = explode(' ', $randnum); //Breaks string into array.
		echo max($string). " ";
		echo min($string);
	}
	echo max_n_min("1 2 3 4 5"). "<br>";
	echo max_n_min("1 2 -3 4 5"). "<br>";
	echo max_n_min("1 9 3 4 -5"). "<br>";
	?>
</body>
</html>