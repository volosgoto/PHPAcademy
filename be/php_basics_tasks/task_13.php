<!DOCTYPE html>
<html>
<head>
	<title>Task 13</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
// <p>13. Заданы две переменные: s - длина участка, который проехал автомобиль; t - время движения в часах. Вывести скорость автомобиля на заданном участке в км/час и в м/сек.</p>
	$way = 10; // km
	$wayTime = 2; // hr
	$speed = $way / $wayTime;

	echo "Cкорость автомобиля на заданном участке: {$speed} км/час";

	?>
</body>
</html>