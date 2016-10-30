<?php
function actionContacts(){
    require_once (MODELS_DIR . '/' . 'contacts.php');
    return render('contacts', [],  ['title' =>  "Контакты" .' :: ' . ROOT_TITLE]);
}