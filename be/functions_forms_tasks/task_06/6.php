<?php

/*
<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>
 */
echo "<pre>";
print_r($_POST);
print_r($_FILES);
echo "</pre>";


    $a = file_get_contents($_FILES['userfile']['tmp_name']);

file_put_contents("test.jpg", $a);

/*
array (size=1)
  'userfile' =>
    array (size=5)
      'name' => string '320424.jpg' (length=10)
      'type' => string '' (length=0)
      'tmp_name' => string '' (length=0)
      'error' => int 2
      'size' => int 0
 */


?>