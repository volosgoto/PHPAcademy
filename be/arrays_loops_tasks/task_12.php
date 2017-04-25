<!DOCTYPE html>
<html>
<head>
	<title>task 12</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>
<?php
/*
<p>12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет
меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для
этого (итерации — это количество проходов цикла), и запишите его в переменную $num.</p>*/
	$n = 150;
	$num=0;
	
	for ($n ; $n > 50 ; $n/=2) {
		$num++;
		echo "Число $num =  $n";
		echo '<br>';
	}
	
	echo "Итераций: $num";

?>

</body>
</html>