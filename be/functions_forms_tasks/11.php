<?php
/*
<p>11. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.<br>
Пример:<br><br>
Входная строка: 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';<br><br>
Строка, возвращенная функцией :  'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался.А там хоть трава не расти.';</p>

 */
// $text = "PHP is a popular general-purpose scripting language that is especially suited to web development.";

$text = "the PHP development team announces the immediate availability of PHP 7.1.4. several bugs have been fixed. all PHP 7.1 users are encouraged to upgrade to this version";

//$text = "а васька слушает да ест. а воз и ныне там."

function firstLetter($text) {
    $arr = explode(". ",$text);
    $capitalLetterText = "";
    foreach($arr as $str){
        $capitalLetterText .= ucfirst($str). ". ";
    }

    return $capitalLetterText;

}

echo firstLetter($text);

?>