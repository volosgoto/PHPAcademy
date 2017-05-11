<?php

/*
<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>
 */

echo "<pre>";

    var_dump($_FILES);
echo "</pre>";

if(isset($_POST['submit'])){
    //print_r($_FILES);
    foreach($_FILES['userfiles']['name'] as $k => $val){
        move_uploaded_file($_FILES['userfiles']['name'][$k], "gallery/".$_FILES['userfiles']['name'][$k]);
    }
}

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