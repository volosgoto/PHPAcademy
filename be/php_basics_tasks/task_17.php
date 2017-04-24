<!DOCTYPE html>
<html>
<head>
	<title>Task 17</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
/*
<p>17. Создайте две переменные $a = '78' (строковый тип) и $b = 78 (целочисленный тип). Проверьте эти две переменные на равность, с помощью if выведите "равны" или "не равны".</p>
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