<?php
function actionGallery(){
    require_once (MODELS_DIR . '/' . 'gallery.php');
    return render('gallery', [],  ['title' =>  "Галлерея" .' :: ' . ROOT_TITLE]);
}