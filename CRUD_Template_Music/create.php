<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['create'])) {
        $item = [
            'title'       => $_POST['title'],
        ];
        $database->query("
            insert into Исполнитель (`название`) 
            values ('{$item['title']}')

        ");
        header('Location: index.php');
    }


    // вызов функции рендера шаблона HTML-страницы
    renderPage('create', $page);

    

?>
