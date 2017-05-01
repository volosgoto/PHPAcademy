<!DOCTYPE html>
<html>
<head>
	<title>task 25</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.</p>
 */
$arr = array();

for( $i = 0; $i < 10; $i++) {
    $arr[$i] = rand(0, 10);
}
// Выводим массив
echo "<pre>";
 var_dump($arr);
echo "</pre>";
// или циклом
//	 foreach ($arr as $key => $value) {
//	 	echo "$key";
//	 	echo '<br>';
//	 }

	$max=max($arr);
	$min=min($arr);

	echo "Максимальное значение массива: $max";
	echo '<br>';
	echo "Минимально значение массива: $min";

	echo '<hr>';

// меняем местами
	$max=$min+$max;
	$min=$max-$min;
	$max=$max-$min;

	echo "Минимальное значение массива: $max";
	echo '<br>';
	echo "Максимальное значение массива: $min";


?>

</body>
</html>