<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    $page['ispolnitel'] = $database->get_all(
        'select * from `Новости`'
    );

    // вызов функции рендера шаблона HTML-страницы
    renderPage('read', $page);



?>
