<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['delete'])) {
        $item = [
            'номер'       => $_POST['номер'],
        ];
        $database->query("
            delete from Новости where `номер`={$item['номер']}

        ");
        header('Location: index.php');
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('delete', $page);

?>
