<!DOCTYPE html>
<html>
<body>
	<?php 
	/*GROUP 1 - A function that removes all exclamation 
	marks from a given string.*/
	function eliminate($shift){
		$expel = str_replace('!', ' ', $shift); 
		//Inside the str_replace(search, replace, subject).
		return $expel;
	}
	echo eliminate("Hello World!"). "<br>";
	echo eliminate("Hello! World!");
	?>

</body>
</html>