<!DOCTYPE html>
<html>
<head>
	<title>task 23</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*<p>23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.</p>
По желанию можете сделать проверку на корректность введения данных пользователем.
 */
$number = 123;
$number=(str_split($number));
$result=0;
    for ( $i=0; $i < count($number); $i++) {
        $result += $number[$i];
    }
echo "Сума чисел: {$result}";

?>

</body>
</html>