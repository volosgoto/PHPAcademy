<!DOCTYPE html>
<html>
<head>
	<title>Task 23</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
/*
<p>23. Напишите 3 строки, используя три разные функции для вывода текста.</p>
 */
	$myString = "Hello string!";

	echo 'echo ' . $myString . '<br>';
	print ('print ' . $myString . '<br>');

echo <<<LABEL
heredoc $myString <br>
LABEL;



	?>
</body>
</html>