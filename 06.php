<!DOCTYPE html>
<html>
<body>
	<?php 
	//GROUP 1 - A function that checks if input is a palindrome or not.
	function Palindrome ($swap){
		//Checking condition if met using ternary operator.
		echo (strrev($swap)==$swap) ? "true" : "false"; 
		echo "<br>";
	}
	Palindrome ("anna"); //Calling the function Palindrome.
	Palindrome ("walter");
	Palindrome ("12321");
	Palindrome ("123456");
	?>
</body>
</html>