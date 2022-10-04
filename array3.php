<html>
 	<head>
 		<title>Array Exercises Part 2</title>
 	</head>
<?php
print "Write a PHP script to separate odd and even integers in separate arrays.</br> ";
	$nums= file("numbers.txt");
	for($a=1;$a<=14;$a++)
	{
		if($nums[$a]%2!=0)
		{
			print"<br>"."The Odd Numbers are = ".$nums[$a];
		}
	}
print"<br>";
	for($a=0;$a<=14;$a++)
	{
		if($nums[$a]%2==0)
		{
			print"<br>"."The Even Numbers are = ".$nums[$a];
		}
	}

?>
</body>
</html>
