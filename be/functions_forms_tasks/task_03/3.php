<?php

/*
<p>3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.</p>

 */


    $wordLenght=$_GET['lenght'];

    $file = file_get_contents('3.txt');
    $arr = (explode(' ',$file));
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] == strlen($wordLenght)){
                unset($arr[$i]);
            }
        }

file_put_contents('3clear', implode(" ", $arr));

?>