<!DOCTYPE html>
<html>
<head>
	<title>task 18</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p>
 */
echo date('Y.m.d');
echo '<br>';

$arr = array(1, 2, 3, 4, 5, 6, 7);
foreach($arr as $key) {
    $day = date("w");
    if ($key == 6 || $key == 7) {
        echo "<b>Выходной  $key</b>";
        echo '<br>';
    } else {
        echo "$key";
        echo '<br>';
    }
}

?>

</body>
</html>