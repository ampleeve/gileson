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
        <table id="main">
            <tr id="header">
                <td id="logo">
                   Gileson
                </td>
                <td id="phoneHeader">+371 282 20 760</td>
                <td id="emailHeader">e@gileson.com</td>
                <td id="balanceHeaderTable">
                    <table id="balanceHeader">
                        <tr>
                            <td id="cart">$ 99,54</td>
                            <td id="check">checkout</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr id="menu">
                <td colspan="4">
                    <table id="menuTable">
                        <tr>
                            <td>
                                <ul>
                                    <li><a href="/">Главная</a></li>
                                    <li><a href="/?controller=articles&action=Articles">Статьи</a></li>
                                    <li><a href="/?controller=catalog&action=Catalog">Каталог</a></li>
                                    <li><a href="/?controller=gallery&action=Gallery">Галерея изображений</a></li>
                                    <li><a href="/?controller=registration&action=Registration">Регистрация</a></li>
                                    <li><a href="/?controller=contacts&action=Contacts">Контакты</a></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr id="content">
                <td colspan="4"><?= $content; ?></td>
            </tr>
            <tr id="footer">
                <td colspan="4"><p>© Gileson, 2015 - 2016</p></td>
            </tr>


        </table>

        </body>









        <!--
        <table id="main" border="1px">
            <tr id="header">
               <td colspan="2">
                   <img id="logo" src="../i/logo.png">
               </td>
            </tr>
            <tr id="menu">
                <td colspan="2">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/?controller=articles&action=Articles">Статьи</a></li>
                        <li><a href="/?controller=catalog&action=Catalog">Каталог</a></li>
                        <li><a href="/?controller=gallery&action=Gallery">Галерея изображений</a></li>
                        <li><a href="/?controller=registration&action=Registration">Регистрация</a></li>
                        <li><a href="/?controller=contacts&action=Contacts">Контакты</a></li>
                    </ul>
                </td>
            </tr>
            <tr id="content">
                <td id="left">
                    Left content
                </td>
                <td id="center">

                </td>
            </tr>
            <tr id="footer">
                <td colspan="2">
                    <p>© Gileson, 2015 - 2016</p>
                </td>
            </tr>
        </table> -->
</html>

