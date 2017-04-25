<!DOCTYPE html>
<html>
<head>
	<title>task 8</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
/*
<p>8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'.
 */
	$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	$str = implode("", $array);

	var_dump($str);

?>


</body>
</html>