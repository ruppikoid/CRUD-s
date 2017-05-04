<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['update'])) {
        $database->query("
            update `Публикация` set 
            
            `номер_автора`               = '{$_POST['author']}',
            `название`                   = '{$_POST['title']}',
            `статус`                     = '{$_POST['stasus']}',
            `теги`                       = '{$_POST['tegs']}',
            `контент`                    = '{$_POST['content']}',
            `краткое_описание`           = '{$_POST['disc']}',
            `поддержка_комментариев`     = '{$_POST['comm']}',
            `количество_комментариев`    = '{$_POST['count_comm']}',
            `привилегии`                 = '{$_POST['priveleg']}',
            `дополнительно`              = '{$_POST['more']}',
            `категория`                  = '{$_POST['categories']}' 

             where `номер` = '{$_POST['id']}'
        ");
        header('Location: read.php');
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('update', $page);

?>
