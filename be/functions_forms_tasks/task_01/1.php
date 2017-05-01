<?php 
	
/*
<p>1. Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.
</p>

*/

function getCommonWords($a, $b) {
	if (is_string($_GET['varA']) && is_string($_GET['varB'])) {
			$varA = explode(' ', $_GET['varA']);
			$varB = explode(' ', $_GET['varB']);
			$resultArray = array_intersect($varA, $varB);
	}
	if  ($resultArray) {
		echo "Одинаковые значения полей: ";
			foreach ($resultArray as $value) {
				echo "$value" . ' ';
			} 
	} else {
		echo "Нет одинаковых значений";
	}
}
	
getCommonWords($_GET['varA'], $_GET['varB']);

?>