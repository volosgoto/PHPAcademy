<!DOCTYPE html>
<html>
<head>
	<title>Task 10</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
		<?php
// <p>10. С помощью конструкции switch выведите фразу: "Это рабочий день", если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).</p>
 		$day = 1;
 		$work = 'Это рабочий день!';
 		$weekend = 'Выходной!';
 		
 		switch ($day) {
 			case (1) :
 				echo $work;
 				break;
 			case (2) :
 				echo $work;
 				break;
 			case (3) :
 				echo $work;
 				break;
 			case (4) :
 				echo $work;
 				break;
 			case (5) :
				echo $work;
 				break;
 			default:
 				echo $weekend;
 				break;
 		}
		?>
</body>
</html>