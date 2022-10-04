<html>
 	<head>
 		<title>Array Exercises Part 2</title>
 	</head>
<?php
	print "Write a PHP script to count the frequency of each element of an array.</br>";
	$nums= file("numbers.txt");
	print_r(array_count_values($nums));
?>
</body>
</html>
