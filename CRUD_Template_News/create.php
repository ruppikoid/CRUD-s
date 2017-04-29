<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['create'])) {
        $item = [
            'заголовок'       => $_POST['title'],
            'краткое_описание'       => $_POST['desc'],
            'содержимое'       => $_POST['content'],
            'автор'       => $_POST['author'],
            'номер'       => $_POST['номер'],
        ];
        $database->query("
             insert into Новости (`заголовок`, `краткое_описание`, `содержимое`, `автор`) values ('{$item[заголовок]}', '{$item[краткое_описание]}', '{$item[содержимое]}', '{$item[автор]}');

        ");
        header('Location: index.php');
    }


    // вызов функции рендера шаблона HTML-страницы
    renderPage('create', $page);

    

?>
