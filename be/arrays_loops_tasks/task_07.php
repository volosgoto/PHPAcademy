<!DOCTYPE html>
<html>
<head>
	<title>task 7</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
/*
<p>7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if
выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.</p>
 */
	$arr = array(2, 5, 9, 15, 0, 4);

	foreach ($arr as $value) {
		if ($value > 3 && $value < 10) {
			echo "$value";
			echo '<br>';
		}

	}


?>


</body>
</html>