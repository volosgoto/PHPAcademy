<!DOCTYPE html>
<html>
<head>
	<title>Task 18</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
/*
<p>18. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на эквивалентность, с помощью if выведите "эквивалентны" или "не эквивалентны".</p>
	 */
	$a = 78;
	$b = '78';
		if ($a === $b) {
			echo 'Равны';
		} else {
			echo 'Не равны';
		}
	?>
</body>
</html>