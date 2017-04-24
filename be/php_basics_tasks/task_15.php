<!DOCTYPE html>
<html>
<head>
	<title>Task 15</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
/*
<p>15. Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
</p>
	 */
		$a = 20;
		$b = 5.5;
		$operator = '/';

		echo "Выполнить действие: {$a} {$operator} {$b} <br>";
		if (is_integer($a) || is_integer($b) || is_float($a) || is_float($b)) {
			switch ($operator) {
				case ('+'):
					$a = $a + $b;
					echo "Результат сложения: {$a}";
					break;
				case ('-'):
					$a = $a - $b;
					echo "Результат вычитания: {$a}";
					break;
				case ('*'):
					$a = $a * $b;
					echo "Результат умножения: {$a}";
					break;
				case ('/'):
					if ($b != 0){
						$a = $a / $b;
						echo "Результат деления: {$a}";
					} else {
						echo 'Деление на 0!';
					}
				break;
		//		default:
		//			echo "";
		//			break;
			}
		}
	?>
</body>
</html>