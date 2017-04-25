<!DOCTYPE html>
<html>
<head>
	<title>task 1</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
/*
<p>3. Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.</p>
 */
	$result = 0;
	$myArray = array(26, 17, 136, 12, 79, 15);

	foreach ($myArray as $value) {
		$result += pow($value, 2);
	}
	echo "$result";
?>


</body>
</html>