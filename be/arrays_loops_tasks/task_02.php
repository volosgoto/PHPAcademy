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
<p>2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</p>
 */
	$result = 0;
	
	$myArray = array(1, 20, 15, 17, 24, 35);
	foreach ($myArray as $value) {
		$result += $value;
	}
	echo "$result";
?>


</body>
</html>