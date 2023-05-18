<!DOCTYPE html>
<html>
<body>
	<?php 
	//GROUP 1 - A function that repeat string, using loops.
	function object($variable){
		for ($i = 0; $i <= 5; $i++){
			echo $variable;
		}
		echo "<br>";
	}

	function object2($variable2){
		for ($j = 0; $j < 5; $j++){
			echo $variable2;
		}
		echo "<br>";
	}

	object("*");
	object2("Hello");
	?>
</body>
</html>