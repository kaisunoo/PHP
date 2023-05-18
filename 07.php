<!DOCTYPE html>
<html>
<body>
	<?php 
	/*GROUP 1 - A function that multiply a given number by eight if it is an even
	number and by nine otherwise.*/
	function accumulate($digit){
		if ($digit %2 == 0){ //Modulo returns the remainder of division. 
			$concoction = $digit * 8; //If returned 0; even.
		}
		else {
			$concoction = $digit * 9; //If returned 1; odd.
		}
		return $concoction; //Return value of the function.
	}
	echo accumulate (2). "<br>";
	echo accumulate (1). "<br>";
	echo accumulate (8). "<br>";
	echo accumulate (5). "<br>";
	?>
</body>
</html>