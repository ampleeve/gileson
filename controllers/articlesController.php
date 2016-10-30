<?php
function actionArticles(){
    require_once (MODELS_DIR . '/' . 'articles.php');
    return render('articles', [],  ['title' =>  "Статьи" .' :: ' . ROOT_TITLE]);
}