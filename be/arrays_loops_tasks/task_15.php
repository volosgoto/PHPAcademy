<!DOCTYPE html>
<html>
<head>
	<title>task 15</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>15. Дан массив $arr. С помощью цикла foreach и переменной $count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.</p>

 */
	$count = 0;
	$arr = array(4, 2, 5, 19, 13, 0, 10);
	foreach ($arr as $key) {
		$count++;
		}
	echo $count;

?>

</body>
</html>