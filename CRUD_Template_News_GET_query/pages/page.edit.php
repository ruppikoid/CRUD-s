<div class="uk-section uk-text-center">
    <h1><?= $title ?></h1>
    <p>На этой странице можно добавить новую или отредактировать выбранную запись, если передан её порядковый номер через $_GET</p>
</div>

<hr class="uk-divider-icon">

<?php if (isset($_GET['id'])) : ?>
<!-- Панель редактирования выбранной записи -->
    <form method="post" class="uk-form uk-padding-large">
        <fieldset class="uk-fieldset">
            <legend class="uk-legend uk-text-center">Редактирование записи</legend>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Заголовок" 
                name="title" value="<?= $item['title'] ?>">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Краткое описание" 
                name="excerpt" value="<?= $item['excerpt'] ?>">
            </div>

            <div class="uk-margin">
                <input type="date" class="uk-input" placeholder="Дата публикации" 
                name="publish_date" value="<?= date("Y-m-d", strtotime($item['publish_date'])) ?>">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Автор" 
                name="author" value="<?= $item['author'] ?>">
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea" rows="5" placeholder="Контент" 
                name="content" ><?= $item['content'] ?></textarea>
            </div>

            <div class="uk-margin uk-text-center">
                <button class="uk-button uk-button-secondary" type="submit" name="update">Обновить</button>
            </div>

        </fieldset>
    </form>
<?php else : ?>
<!-- Панель добавления новой записи -->
    <form method="post" class="uk-form uk-padding-large">
        <fieldset class="uk-fieldset">
            <legend class="uk-legend uk-text-center">Добавление записи</legend>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Заголовок" name="название">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Краткое описание" name="краткое">
            </div>

            <div class="uk-margin">
                <input type="date" class="uk-input" placeholder="Дата публикации" name="дата публикации">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Автор" name="автор">
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea" rows="5" placeholder="Контент" name="контент"></textarea>
            </div>

            <div class="uk-margin uk-text-center">
                <button class="uk-button uk-button-secondary" type="submit" name="create">Добавить</button>
            </div>

        </fieldset>
    </form>
<?php endif ?>
