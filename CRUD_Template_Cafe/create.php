<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Описание системы';

    if (isset($_POST['create'])) {
        $item = [
            // 'код'           => $_POST['id'],
            'название'  => $_POST['title'],
            'статус'       => $_POST['status'],
            'описание'      => $_POST['disc'],
            'номер_меню'       => $_POST['number'],
            'дополнительно'      => $_POST['longdisc']
        ];

        $database->query("

            insert into раздел (название, статус, описание, номер_меню, дополнительно)  
            values ('{$item['название']}', '{$item['статус']}', '{$item['описание']}', '{$item['номер_меню']}', '{$item['дополнительно']}')
                       
        ");

        header('Location: read.php');
    }


    // вызов функции рендера шаблона HTML-страницы
    renderPage('create', $page);

    

?>
