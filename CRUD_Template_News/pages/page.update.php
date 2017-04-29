<div class="uk-section uk-text-center">
    <h1><?= $title ?></h1>
    <p>Данная страница сайта показывает возможность редактирования записей</p>
</div>

    <form method="post" class="uk-form uk-padding-large">
        <fieldset class="uk-fieldset">
            <legend class="uk-legend uk-text-center">Изменение записей в таблице</legend>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="заголовок" name="title">
            </div>
            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="краткое описание" name="desc">
            </div>
            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="содержание" name="content">
            </div>
            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="автор" name="author">
            </div>
            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="номер" name="номер">
            </div>


            <div class="uk-margin uk-text-center">
                <button class="uk-button uk-button-secondary" type="submit" name="update">Обновить запись</button>
            </div>

        </fieldset>
    </form>