<div class="uk-section uk-text-center">
    <h1><?= $title ?></h1>
    <p>Данная страница сайта показывает возможность создания новых записей</p>
</div>

    <form method="post" class="uk-form uk-padding-large">
        <fieldset class="uk-fieldset">
            <legend class="uk-legend uk-text-center">Добавление нового товара</legend>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Артикул" name="id">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Наименование" name="title">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Стоимость" name="price">
            </div>

            <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Количество" name="quantity">
            </div>

             <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Описание" name="disc">
            </div>

             <div class="uk-margin">
                <input type="text" class="uk-input" placeholder="Номер раздела" name="number">
            </div>

            <div class="uk-margin uk-text-center">
                <button class="uk-button uk-button-secondary" type="submit" name="create">Добавить</button>
            </div>

        </fieldset>
    </form>