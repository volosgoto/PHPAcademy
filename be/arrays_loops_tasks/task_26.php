<!DOCTYPE html>
<html>
<head>
	<title>task 26</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.</p>

 */
$valuer = array();

for( $i = 0; $i < 10; $i++) {
    $valuer[$i] = rand(0, 100);
}
// Выводим массив
echo "<pre>";
 var_dump($valuer);
echo "</pre>";

foreach ($valuer as $key => $value) {
	if ($value > 0 && $key % 2 == 0) {
    	echo "Парные и больше нуля: {$key} => {$value}";
		echo '<br>';
    }
	if ($value > 0 && $key % 2 == 1) {
		echo "Не парные и больше нуля: {$key} => {$value}";
		echo '<br>';
	}

	if ($value == 0) {
		echo "Нулевое значенеt: {$key} => {$value}";
		echo '<br>';
    }
}

?>

</body>
</html>