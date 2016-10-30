<?php
function actionCatalog(){
    require_once (MODELS_DIR . '/' . 'catalog.php');
    return render('catalog', [],  ['title' =>  "Каталог" .' :: ' . ROOT_TITLE]);
}