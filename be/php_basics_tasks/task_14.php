<!DOCTYPE html>
<html>
<head>
	<title>Task 14</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
// <p>14. Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10. Вывести число 10, используя только переменную $foo (не опечатка).</p>
	$foo = 'bar';
	$bar = 10;
	$foo = $bar;

	echo $foo;

	?>
</body>
</html>