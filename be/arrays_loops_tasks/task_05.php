<!DOCTYPE html>
<html>
<head>
	<title>task 5</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
/*
<p>5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощью
цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200
долларов.'.</p>
 */

	$arr = array('Коля'=> 200, 'Вася'=> 300, 'Петя'=> 400);

	foreach ($arr as $key => $value) {
		echo "{$key} - зарплата {$value} долларов";
		echo '<br>';
	}



?>


</body>
</html>