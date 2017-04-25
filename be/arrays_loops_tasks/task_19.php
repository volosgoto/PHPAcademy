<!DOCTYPE html>
<html>
<head>
	<title>task 19</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
 */
echo date('Y.m.d');
echo '<br>';

$arr = array(1, 2, 3, 4, 5, 6, 7);
foreach($arr as $key) {
    $day = date("N");
    if ($key == $day) {
        echo "<i>Текущий день $key</i>";
        echo '<br>';
    } else {
        echo "$key";
        echo '<br>';
    }
}

?>

</body>
</html>