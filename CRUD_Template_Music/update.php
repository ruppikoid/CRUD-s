<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['update'])) {
        $database->query("
            update `Исполнитель` set 
            
            `название`    = '{$_POST['title']}' 
            
             where `номер` = `{$_POST['id']}`
        ");
        header('Location: index.php');
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('update', $page);

?>
