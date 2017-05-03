<?php

/*
<p>4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>

 */

function checkDir($dir) {
	$f= scandir($dir);
		foreach ($f as $file) {
    	echo $file .'<br>';
	}
}

// $dir  = '/opt/lampp/htdocs/test/task_04';
$dir = __DIR__;
checkDir($dir);

?>