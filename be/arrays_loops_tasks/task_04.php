<!DOCTYPE html>
<html>
<head>
	<title>task 4</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
/*<p>4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.</p>
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 */

	$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

	foreach ($arr as $key => $value) {
		echo "Ключ $key";
		echo '<br>';
	}

	foreach ($arr as $value) {
		echo "Значение $value";
		echo '<br>';
	}

?>


</body>
</html>