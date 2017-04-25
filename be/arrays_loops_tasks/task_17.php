<!DOCTYPE html>
<html>
<head>
	<title>task 17</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
 <p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
 */

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
foreach($arr as $key) {
    $month = date("m");
    if ($key == $month) {
        echo "Текущий месяц $key";
        echo '<br>';
    } else {
        echo "$key";
        echo '<br>';
    }
}

?>

</body>
</html>