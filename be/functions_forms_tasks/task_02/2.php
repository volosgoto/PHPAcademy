<?php

/*
<p>2. Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.</p>
*/

function leght_top_three($myArr) {
    $myArr = $_GET['textarea'];
    $myArr = explode(' ', $myArr);
    // print_r($myArr);
    for ($myArrItem = 0; $myArrItem < count($myArr); $myArrItem++) {
        for ($i = 0; $i < count($myArr)-1; $i++) {
            if (mb_strlen($myArr[$i]) < mb_strlen($myArr[$i+1])){
                $count = $myArr[$i];
                $myArr[$i] = $myArr[$i+1];
                $myArr[$i+1] = $count;
            }
        }
    }

    return (array_slice($myArr, 0, 3, TRUE));
    //return (array_slice($myArr, 0, 3));
}

print_r(leght_top_three($_GET['textarea']));

?>