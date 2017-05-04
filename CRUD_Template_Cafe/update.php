<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['update'])) {
        $database->query("
            update `раздел` set 
            
            `название`      = '{$_POST['title']}',
            `статус`        = '{$_POST['status']}',
            `описание`      = '{$_POST['disc']}',
            `номер_меню`    = '{$_POST['number']}',
            `дополнительно` = '{$_POST['longdisc']}' 

             where `номер`  = `{$_POST['id']}`

        ");
        header('Location: read.php');
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('update', $page);

?>
