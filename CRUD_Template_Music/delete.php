<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['delete'])) {
        $item = [
            'id'       => $_POST['id'],
        ];
        $database->query("
            DELETE FROM `Исполнитель`
            WHERE `номер`={$item['id']}

        ");
        header('Location: index.php');
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('delete', $page);

?>
