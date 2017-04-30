<div class="uk-section uk-text-center">
    <h1><?= $title ?></h1>
    <p>Данная страница сайта показывает возможность просмотра записей</p>
</div>

<?php foreach ($ispolnitel as $item) : ?>

    <div class="uk-card uk-card-default uk-card-body uk-margin">
        <h3 class="uk-card-title">#<?= $item['номер'] ?> - <?= $item['название'] ?></h3>
    </div>

<?php endforeach ?>