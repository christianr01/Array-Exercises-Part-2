<html>
 	<head>
 		<title>Array Exercises Part 2</title>
 	</head>
<?php
	print "Write a PHP script to count a total number of duplicate elements in an array.</br> ";
	$nums = file("numbers.txt");
	$unique = array_unique($nums);
	$duplicates = array_diff_assoc($nums, $unique);
	print_r($duplicates);
?>
</body>
</html>
