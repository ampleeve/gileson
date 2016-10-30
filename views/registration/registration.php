<?php
?>

<div>
    <h1>Регистрация</h1>
</div>
<div>
        <form action="/?controller=registration&action=registration" method="POST">
            <fieldset>
                <legend>Персональные данные</legend>
                <label for="form">Фамилия</label>
                <input type="text" name="surname"/>
                <br>
                <label for="form">Имя</label>
                <input type="text" name="name"/>
                <br>
                <label for="form">Отчество</label>
                <input type="text" name="patronymic"/>
                <br>
            </fieldset>
            <fieldset>
                <legend>Загрузка фото</legend>
                <label for="form">Изображение</label>
                <input type="file" name="photo"/>
            </fieldset>
            <fieldset>
                <legend>Регистрационные данные</legend>
                <label for="form">email</label>
                <input type="text" name="email"/>
                <label for="form">Пароль</label>
                <input type="password" name="password"/>
            </fieldset>
            <fieldset>
                <legend>Дополнительная информация</legend>
                <label for="form">Адрес сайта
                <input type="text" name="site" value="http://"/></label>
                <label for="form">Выберете пол
                    <input type="radio" name="gender"/> Мужской
                    <input type="radio" name="gender"/> Женский
                </label>
                <label for="form">Дата рождения
                    <input type="date" name="birthDay"/> Дата рождения
                </label>
                <label for="form">Блюда какой кухни вы предпочитаете?
                   <input type="checkbox" name="cuisine"/> Итальянская
                    <input type="checkbox" name="cuisine"/> Въетнамская
                </label>
                <label for="form">Расскажите о себе
                    <textarea cols="100" rows="5" name="about"></textarea>
                </label>
            </fieldset>
            <label for="form">
                <input type="submit"value="Зарегистрироваться">
            </label>
            <label for="form">
                <input type="reset"value="Сбросить форму">
            </label>
        </form>
</div>