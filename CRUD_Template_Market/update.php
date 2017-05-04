<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['update'])) {
        $database->query("
            update `Товары` set 
            
            `артикул`       = '{$_POST['id']}', 
            `наименование`  = '{$_POST['title']}', 
            `стоимость`     = '{$_POST['price']}', 
            `количество`    = '{$_POST['quantity']}'
            `описание`      = '{$_POST['disc']}', 
            `номер_раздела` = '{$_POST['number']}'
            

            where `артикул` = '{$_POST['old_id']}'
        ");
        header('Location: read.php');
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('update', $page);

?>
