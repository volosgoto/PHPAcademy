<!DOCTYPE html>
<html>
<head>
	<title>task 13</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
Вывести таблицу умножения</p>
 */

$i = 0;
$k = 0;

for($i = 1; $i<=10; $i++) {
   for($k=1;$k<=10;$k++){
       echo "$i * $k =" . $i*$k . '<br>';
   }
    echo '<br>';
}
?>

</body>
</html>