<?php
?>
<div>
    <h1 align="center">Регистрация</h1>
</div>
<div>
    <form action="/?controller=registration&action=registration" method="POST">
        <table id="registration">
            <tr>
                <td class="textForm">
                    <label for="surname">Фамилия</label>
                </td>
                <td>
                    <input id="surname" type="text" name="surname"/>
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="name">Имя</label>
                </td>
                <td>
                    <input id="name" type="text" name="name"/>
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="patronymic">Отчество</label>
                </td>
                <td>
                    <input id="patronymic" type="text" name="patronymic"/>
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="photo">Изображение</label>
                </td>
                <td>
                    <input id="photo" type="file" name="photo"/>
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="email">email</label>
                </td>
                <td>
                    <input id="email" type="text" name="email"/>
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="password">Пароль</label>
                </td>
                <td><input id="password" class="rPassword" type="password" name="password"/></td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="address">Адрес сайта</label>
                </td>
                <td>
                    <input id="address" type="text" name="site" value="http://"/>
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="gender">Выберете пол</label>
                </td>
                <td>
                    <input type="radio" name="gender" id="men"/>Мужской
                    <br>
                    <input type="radio" name="gender" id="women"/>Женский
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="birhDay">Дата рождения</label>
                </td>
                <td>
                    <input id="birhDay" type="date" name="birthDay"/>
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="cuisine">Блюда какой кухни вы предпочитаете?</label>
                </td>
                <td>
                    <input class="checkbox" type="checkbox" name="cuisine"/> Итальянская
                    <br>
                    <input type="checkbox" name="cuisine"/> Въетнамская
                    <br>
                    <input class="checkbox" type="checkbox" name="cuisine"/>  Французская
                    <br>
                    <input type="checkbox" name="cuisine"/> Корейская
                    <br>
                    <input class="checkbox" type="checkbox" name="cuisine"/> Китайская
                    <br>
                    <input type="checkbox" name="cuisine"/> Европейская
                    <br>
                    <input class="checkbox" type="checkbox" name="cuisine"/> Американская
                    <br>
                    <input type="checkbox" name="cuisine"/> Шотландская
                    <br>
                </td>
            </tr>
            <tr>
                <td class="textForm">
                    <label for="about">Расскажите о себе</label>
                </td>
                <td>
                    <textarea id="about" cols="100" rows="5" name="about"></textarea>
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" class="submit" value="Зарегистрироваться">
                    <input class="reset" type="reset"value="Сбросить форму">
                </td>
            </tr>
        </table>
    </form>
</div>