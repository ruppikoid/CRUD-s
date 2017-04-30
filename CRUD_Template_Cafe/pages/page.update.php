<div class="uk-section uk-text-center">
    <h1><?= $title ?></h1>
    <p>Данная страница сайта показывает возможность редактирования записей</p>
</div>

    <form method="post" class="uk-form uk-padding-large">
        <fieldset class="uk-fieldset">
            <legend class="uk-legend uk-text-center">Изменение записей в таблице</legend>

           

             <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Название" name="title">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Статус" name="status">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Описание" name="disc">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Номер меню" name="number">
            </div>
            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Номер раздела" name="id">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Дополнительное описание" name="longdisc">
            </div>

            <div class="uk-margin uk-text-center">
                <button class="uk-button uk-button-secondary" type="submit" name="update">Обновить запись</button>
            </div>

        </fieldset>
    </form>