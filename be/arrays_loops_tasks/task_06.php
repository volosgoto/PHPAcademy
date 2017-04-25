<!DOCTYPE html>
<html>
<head>
	<title>task 5</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
/*
<p>6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array('green', 'red','blue');
$ru = array('зеленый', 'красный', 'голубой');</p>
 */
	$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
	$en = array();
	$ru = array();
	

	foreach ($arr as $key => $value) {
		$en[] = $key;
		$ru[] = $value;
	}
	print_r($en);
	echo '<hr>';
	print_r($ru);


?>


</body>
</html>