<?php
/*
<p>12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.<br>
Пример:<br><br>
Входная строка:  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
</p>
*/


$text = "1 the PHP development team announces the immediate availability of PHP 7.1.4. several bugs have been fixed. 2 all PHP 7.1 users are encouraged to upgrade to this version";

function reverseSentense($text){
    $textToArray = explode('. ',$text);
    krsort($textToArray);
    foreach($textToArray as $part){
        $textNew[] = $part.'. ';
    }
    $textToArray = implode($textNew);
    return($textToArray);
}
echo reverseSentense($text);

?>