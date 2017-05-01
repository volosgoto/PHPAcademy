<!DOCTYPE html>
<html>
<head>
	<title>Task 11</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
		<?php
// <p>11. С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной day попадает в диапазон чисел от 6 до 7 (включительно).</p>
 		$day = 7;
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
 		}
		?>
</body>
</html>