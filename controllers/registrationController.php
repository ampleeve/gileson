<?php
function actionRegistration(){
    require_once (MODELS_DIR . '/' . 'registration.php');
    return render('registration', [],  ['title' =>  "Регистрация" .' :: ' . ROOT_TITLE]);
}