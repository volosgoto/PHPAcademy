<!DOCTYPE html>
<html>
<head>
	<title>Task 21</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="php_basics_tasks">
	<meta name="description" content="php_basics_tasks">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
	<?php
/*
<p>21. Приведите число 0 к типу boolean. Объясните результат.</p>
 */

	$myNumber = 0;
	echo var_dump($myNumber);
	echo '<br>';
	$myBoolean = (boolean)($myNumber);
	echo var_dump($myBoolean);


 	$myNumber = 10;
	echo var_dump($myNumber);
	echo '<br>';
	$myBoolean = (boolean)($myNumber);
	 echo var_dump($myBoolean);

// Пояснение.
/*
При преобразовании в логический тип, следующие
значения рассматриваются как FALSE:
целое 0 (ноль)
число с плавающей точкой 0.0 (ноль)
пустая строка и строка "0"
пустой массив
специальный тип NULL (включая неустановленные
переменные).
Все остальные значения рассматриваются как TRUE
 */


	?>
</body>
</html>