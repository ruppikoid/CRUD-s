<div class="uk-section uk-text-center">
    <h1><?= $title ?></h1>
    <p>На данной странице отображен список всех материалов, которые есть в таблице "news". Также можно просмотреть более подробную информацию при нажатии на кнопку "Далее"</p>
</div>

<!-- Вывод всех записей из переменной $page['news'] -->
<?php foreach ($news as $item) : ?>

    <div class="uk-card uk-card-default uk-card-body uk-margin">
        <h3 class="uk-card-title">#<?= $item['id'] ?> - <?= $item['title'] ?></h3>
        <em class="uk-float-right uk-text-meta"><?= date("d-m-Y", strtotime($item['publish_date']) ) ?> - <?= $item['author'] ?></em>
        <p class="uk-text-meta"><?= $item['excerpt'] ?></p>

        <hr class="uk-divider-icon">

        <p><?= $item['content'] ?></p>

        <div class="uk-margin uk-text-right">
            <a href="edit.php?id=<?= $item['id'] ?>" class="uk-button uk-button-small uk-button-primary">Редактировать</a>
            <a href="delete.php?id=<?= $item['id'] ?>" class="uk-button uk-button-small uk-button-danger">Удалить</a>
        </div>
    </div>

<?php endforeach ?>
