<!DOCTYPE html>
<html>
<head>
	<title>task 1</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
	/*
	<p>1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</p>
	 */
	$myArray = array('html', 'css', 'php', 'js', 'jq');
	foreach ($myArray as $value) {
		echo "$value" . '<br>';
	}
?>
</body>
</html>