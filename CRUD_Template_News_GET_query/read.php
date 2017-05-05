<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Список существующих записей';

    // получение всех записей из таблицы
    $page['news'] = $database->get_all(
        'select * from news'
    );

    // вызов функции рендера шаблона HTML-страницы
    renderPage('read', $page);

?>
