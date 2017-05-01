<!DOCTYPE html>
<html>
<head>
	<title>Task 8</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
		<?php
// <p>8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age является отрицательным числом, или вовсе числом не является.</p>
		$age = -10;
			if (!is_numeric($age) && !is_integer($age) || $age < 0) {
			//if (!is_integer($age) || $age < 0) {
			//if ("integer" != gettype($age) || $age < 0) {
				echo "Возраст указан не верно";
			}
				elseif ($age < 18) {
				echo "Вам еще рано работать <br>";
			}
				elseif ($age >= 18 && $age <=59) {
			echo "Вам еще работать и работать! <br>";
			} else {
				echo "Вам пора на пенсию";
			}
		?>
</body>
</html>