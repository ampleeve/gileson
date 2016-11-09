<?php
/*
 * @var string $title Заголовок страницы
 * @var string $content Контент
 */


?>

<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title><?= $title; ?></title>
            <link rel="stylesheet" type="text/css" href="/css/style.css">
        <body>

        <div id="d1">
            <div id="d11"></div>
            <div id="d12"></div>
            <div id="d13"></div>
            <div id="d14"></div>
        </div>
        <div id="d2">
            <div id="d21">
            </div>
        </div>
        <div id="d3"></div>
        <div id="d4"></div>
        <div id="d5"></div>

        <div id="menu">
            <div id="pm">
                <div id="pm1"><a class="pm" href="#"> Пункт 1</a></div>
                <div id="pm2"><a class="pm" href="#"> Пункт 2</a></div>
                <div id="pm3"><a class="pm" href="#"> Пункт 3</a></div>
                <div id="pm4"><a class="pm" href="#"> Пункт 4</a></div>
                <div id="pm5"><a class="pm" href="#"> Пункт 5</a></div>
            </div>
        </div>

        <!--<div>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/?controller=articles&action=Articles">Статьи</a></li>
                <li><a href="/?controller=catalog&action=Catalog">Каталог</a></li>
                <li><a href="/?controller=gallery&action=Gallery">Галерея изображений</a></li>
                <li><a href="/?controller=registration&action=Registration">Регистрация</a></li>
                <li><a href="/?controller=contacts&action=Contacts">Контакты</a></li>
            </ul>

        </div>
        <div><?= $content; ?></div>

        <footer >
            <div>
                <p>© Gileson, 2015 - 2016</p>
            </div>
        </footer>-->
        </body>

</html>