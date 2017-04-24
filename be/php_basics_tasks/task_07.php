<!DOCTYPE html>
<html>
<head>
	<title>Task 6</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
		<?php
// <p>7. Расширьте конструкцию if из п.5-6, выводя фразу: "Вам еще рано работать" при условии, что значение переменной age попадает в диапазон чисел от 0 до 17 (включительно).</p>
		$age = 17;
			if ($age < 18) {
				echo "Вам еще рано работать <br>";
			} elseif ($age >= 18 && $age <=59) {
				echo "Вам еще работать и работать! <br>";
			} else {
				echo "Вам пора на пенсию";
			}
		?>
</body>
</html>