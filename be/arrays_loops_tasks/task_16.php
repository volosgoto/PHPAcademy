<!DOCTYPE html>
<html>
<head>
	<title>task 16</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9</p>
 */

	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	foreach ($arr as $key => $value) {
		++$key;
		if ($key % 3 == 0) {
				echo "$key";
				echo '<br>';
			} else {
				echo "$key" . ', ';
			}

		}

?>

</body>
</html>