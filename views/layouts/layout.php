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
        <div>
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
        </footer>

        </body>

    </html>