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
// <p>6. Расширьте конструкцию if из п.5, выводя фразу: "Вам пора на пенсию" при условии, что значение переменной age больше 59.</p>
		$age = 34;
			if ($age >= 18 && $age <=59) {
				echo "Вам еще работать и работать! <br>";
			} else {
				echo "Вам пора на пенсию";
			}
		?>
</body>
</html>