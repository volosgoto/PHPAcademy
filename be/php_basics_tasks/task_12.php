<!DOCTYPE html>
<html>
<head>
	<title>Task 12</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
		<?php
// <p>12. С помощью конструкции switch выведите фразу: "Неизвестный день", если значение переменной day не попадает в диапазон чисел от 1 до 7 (включительно).</p>
 		$day = 8;
 		$work = 'Это рабочий день!';
 		$weekend = 'Это выходной день!';

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
 			case (6) :
				echo $weekend;
 				break;
			case (7) :
				echo $weekend;
 				break;
 			default:
 				echo 'Неизвестный день';
 				break;
 		}
		?>
</body>
</html>