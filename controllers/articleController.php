<?php
function actionArticle(){
    require_once (MODELS_DIR . '/' . 'article.php');
    return render('article', [],  ['title' =>  "Заголовок статьи :: Статьи" .' :: ' . ROOT_TITLE]);
}