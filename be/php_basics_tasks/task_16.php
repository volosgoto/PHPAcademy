<!DOCTYPE html>
<html>
<head>
	<title>Task 16</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
/*
<p>16. Создайте две переменные $a и $b, значения которых будут числами. Выведите максимальное число из этих двух.</p>
	 */
	$a = 0;
	$b = 5.5;
	echo "Максимальное между {$a} и {$b} число: ";
	echo ($a > $b) ? $a : $b;
	?>
</body>
</html>