<?php 
	
/*
<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>

*/


	$varA = explode(' ', $_GET['varA']);
	$varB = explode(' ', $_GET['varB']);

	
// добавить проверку на входные данные
	if ($varA == $varB) {
		echo "Равны";
	} else {
		echo "Не равны";
	}
echo "<br>";

var_dump($_GET['varA']);
echo "<br>";

	$result = array_intersect($varA, $varB); 
	foreach ($result as $value) {
		echo "$value";
		echo "<br>";
	}

?>