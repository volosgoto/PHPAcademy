<?php 
	
/*
<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>
*/

//function getTOP3($a) {

	$array = explode(' ', $_GET['textarea']);
	$max['length'] = 0;  
	$max['word'] = '';  
    	for($i=0;$i < count($array);$i++) {  
        	if(strlen($array[$i]) > $max["length"]) {  
        		$max["word"] = $array[$i];  
        		$max["length"] = strlen($array[$i]);  
        	}  
    	}  
	echo "Первое самое длинное слово: <b>".$max["word"]."[".$max["length"]."]</b>";

?>