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
/*<p>20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx</p>
 */
$i = 1;
while( $i<=20 ) {
    $k = 1;
    while( $i >= $k ){
        echo "x";
        $k++;
    }
    echo '<br>';
    $i++;
}

?>

</body>
</html>