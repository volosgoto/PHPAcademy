<?php

/*
<p>6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>
 */

if(isset($_POST['submit'])){
    //print_r($_FILES);
    foreach($_FILES['filename']['tmp_name'] as $k => $val){
        move_uploaded_file($_FILES['filename']['tmp_name'][$k], "gallery/".$_FILES['filename']['name'][$k]);
    }
}

?>