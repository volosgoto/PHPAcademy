<!DOCTYPE html>
<html>
<head>
	<title>task 9</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
/*
<p>11. Выведите столбец четных чисел в промежутке от нуля до 100.</p>
*/
	$i = 0;
	for ($i=1; $i <= 100; $i++) {
		if ($i % 2 == 0)
		echo $i . '<br>';
	}
?>

</body>
</html>