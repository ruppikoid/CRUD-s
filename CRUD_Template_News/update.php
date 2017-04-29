<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['update'])) {
        $database->query("
            update `Новости` set 
            
            `заголовок`='{$_POST['title']}',
            `краткое_описание`='{$_POST['desc']}',
            `содержимое`='{$_POST['content']}',
            `автор`='{$_POST['author']}'

            where `номер`='{$_POST['номер']}'
        ");
        header('Location: index.php');
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('update', $page);

?>
