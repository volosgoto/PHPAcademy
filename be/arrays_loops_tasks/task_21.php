<!DOCTYPE html>
<html>
<head>
	<title>task 20</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.<br><br>
1<br>
22<br>
333<br>
4444<br>
55555</p>
 */
$i = 1;
while ( $i <= 9 ){
    $k = 1;
    while( $i >= $k ) {      //i=2 1>=1 1 1
        echo $i;
        $k++;
    }
    echo '<br>';
    $i++;
}

?>

</body>
</html>