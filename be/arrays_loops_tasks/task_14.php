<!DOCTYPE html>
<html>
<head>
	<title>task 14</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. С помощью цикла foreach и оператора if
проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. Если есть —
выведите на экран 'Есть!', иначе выведите 'Нет!'.</p>
 */

	$arr = array(4, 2, 5, 19, 13, 0, 10);
	foreach ($arr as $value) {
		if ($value > 1 && $value < 5) {
			echo 'Есть!';
		} else {
			echo 'Нет!';
		}
	}

?>

</body>
</html>