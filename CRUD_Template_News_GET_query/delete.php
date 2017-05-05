<?php

    // подключение основного файла приложения
    require("core/app.php");

    // если передан номер записи для удаления
    if (isset($_GET['id'])) {
        // записываем в переменную
        $id = intval($_GET['id']);

        // вызываем удаление в БД
        $database->query(
            'delete from news where id='.$id
        );

        // переадресация на главную страницу
        header("Location: read.php");
    }

?>
