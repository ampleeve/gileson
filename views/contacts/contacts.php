<?php
?>

<div>
    <h1>Контакты</h1>
    <h2>Адрес организации</h2>
    <p>Московская область, Раменский район, посёлок Удельная, ул. Громова, д. 10</p><br>
    <img src="/i/map.png">
    <h2>Обратная связь</h2>
    <form action="/?controller=contacts&action=contacts" method="post">
        <fieldset>
            <legend>Обратная связь</legend>
            <label>Имя</label>
            <input type="text" name="name">
            <br>
            <label>Номер телефона</label>
            <input type="text" name="phone">
            <br>
            <label>email</label>
            <input type="text" name="email">
            <br>
            <label>Вопрос:</label>
            <textarea cols="100" rows="10" name="question"></textarea>
            <br>
            <input type="submit">
        </fieldset>
    </form>
</div>