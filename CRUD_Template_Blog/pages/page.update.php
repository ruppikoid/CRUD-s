<div class="uk-section uk-text-center">
    <h1><?= $title ?></h1>
    <p>Данная страница сайта показывает возможность редактирования записей</p>
</div>

    <form method="post" class="uk-form uk-padding-large">
        <fieldset class="uk-fieldset">
            <legend class="uk-legend uk-text-center">Изменение записей в таблице</legend>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Номер автора" name="author">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Название" name="title">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Статус" name="stasus">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Теги" name="tegs">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="контент" name="content">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Краткое описание" name="disc">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Поддержка комментариев" name="comm">
            </div>

             <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Количество комментариев" name="count_comm">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Привелегии" name="priveleg">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Дополнительно" name="more">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Категория" name="categories">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Номер записи по которой произойдёт обновление записи" name="id">
            </div>

            <div class="uk-margin uk-text-center">
                <button class="uk-button uk-button-secondary" type="submit" name="update">Обновить запись</button>
            </div>

        </fieldset>
    </form>