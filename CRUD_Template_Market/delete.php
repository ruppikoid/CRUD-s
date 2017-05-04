<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['delete'])) {
          $item = [
              
            'артикул'  => $_POST['id'],
        ];

        $database->query("
            delete from Товары where `артикул`={$item['артикул']}

        ");


        header('Location: read.php');
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('delete', $page);

?>
