<!DOCTYPE html>
<html>
<head>
	<title>Task 5</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
		<?php
//<p>5. Напишите конструкцию if, которая выводит фразу: "Вам еще работать и работать" при условии, что значение переменной age попадает в диапазон чисел от 18 до 59 (включительно).</p>
		$age = 60;
			if ($age >= 18 && $age <=59) {
				echo "Вам еще работать и работать! <br>";
			} else {
				echo "Ваш возраст не соотвествет диапазону";
			}
		?>
</body>
</html>