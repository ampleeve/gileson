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
                <br>
                <input type="text" name="surname"/>
                <br>
                <label for="form">Имя</label>
                <br>
                <input type="text" name="name"/>
                <br>
                <label for="form">Отчество</label>
                <br>
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
                <br>
                <input type="text" name="email"/>
                <br>
                <label for="form">Пароль</label>
                <br>
                <input type="password" name="password"/>
            </fieldset>
            <fieldset>
                <legend>Дополнительная информация</legend>
                <label for="form">Адрес сайта
                    <br>
                    <input type="text" name="site" value="http://"/></label>
                <br>
                    <label for="form">Выберете пол
                        <br>
                    <input type="radio" name="gender"/> Мужской
                        <br>
                    <input type="radio" name="gender"/> Женский
                        <br>
                </label>
                <label for="form">Дата рождения
                    <input type="date" name="birthDay"/>
                    <br>
                </label>
                <label for="form">Блюда какой кухни вы предпочитаете?
                    <br>
                   <input type="checkbox" name="cuisine"/> Итальянская
                    <br>
                    <input type="checkbox" name="cuisine"/> Въетнамская
                    <br>
                </label>
                <label for="form">Расскажите о себе
                    <br>
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