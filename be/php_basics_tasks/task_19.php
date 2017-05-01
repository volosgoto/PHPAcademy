<!DOCTYPE html>
<html>
<head>
	<title>Task 19</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
/*
<p>19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.</p>
	 */
	$a = 78;
	$b = '78';
		if ($a === $b) {
			echo 'Равны' . '<br>';
			echo var_dump($a) . '<br>';
			echo var_dump($b) . '<br>';
		} else {
			echo 'Не равны' . '<br>';;
			echo var_dump($a) . '<br>';
			echo var_dump($b) . '<br>';
		}
	?>
</body>
</html>