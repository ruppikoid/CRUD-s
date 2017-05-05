<?php

    // подключение основного файла приложения
    require("core/app.php");

    // пример переменной для рендера
    $page['title'] = 'Панель добавления/редактирования записей';

    // получение выбранной новости, если передан $_GET['id']
    if (isset($_GET['id'])) {
        $id = trim($_GET['id']);

        $page['item'] = $database->get_one(
            'select * from news where id='.intval($id)
        );
    }

    // если была обновлена запись -> обновить в таблице
    if (isset($_POST['update'])) {
        $database->query("
            update news set 
            
            title='{$_POST['title']}', 
            excerpt='{$_POST['excerpt']}', 
            publish_date='{$_POST['publish_date']}', 
            author='{$_POST['author']}', 
            content='{$_POST['content']}' 

            where id={$id}
        ");

        header('Location: edit.php?id='.$id);
    }

    // если была создана новая запись
    if (isset($_POST['create'])) {

        $item = [
            'title'         => $_POST['название'],
            'excerpt'       => $_POST['краткое'],
            'author'        => $_POST['автор'],
            'content'       => $_POST['контент'],
            'publish_date'  => date("Y-m-d", strtotime($_POST['дата_публикации']))
        ];

        $database->query("
            insert into news (title, excerpt, author, content, publish_date) 
            values ('{$item['title']}', '{$item['excerpt']}', '{$item['author']}', '{$item['content']}', '{$item['publish_date']}')
        ");

        header('Location: edit.php?id='.$database->lastInsertID());
    }

    // вызов функции рендера шаблона HTML-страницы
    renderPage('edit', $page);

?>
