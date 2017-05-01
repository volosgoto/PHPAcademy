<!DOCTYPE html>
<html>
<head>
	<title>task 28</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>28. Вывести таблицу умножения с помощью двух циклов for.</p>
 */

for($i = 1; $i<=10; $i++) {
   for($k=1;$k<=10;$k++){
       echo "$i * $k =" . $i*$k . '<br>';
   }
    echo '<br>';
}

?>

</body>
</html>