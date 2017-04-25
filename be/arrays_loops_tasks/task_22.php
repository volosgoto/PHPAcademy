<!DOCTYPE html>
<html>
<head>
	<title>task 22</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="array_loops">
	<meta name="description" content="array_loops">
	<meta name="author" content="Volosovich Andrey">
</head>
<body>

<?php
/*
<p>22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>
 */
$i = 1;
$k = 1;
while( $i <= 5 ) {
    $k = 1;
    while( $i >= $k ) {
        echo 'xx';
        $k++;
    }
    echo '<br>';
    $i++;
}

?>

</body>
</html>