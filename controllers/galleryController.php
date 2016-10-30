<?php
function actionGallery(){
    require_once (MODELS_DIR . '/' . 'gallery.php');
    if($_SERVER['REQUEST_METHOD']==='POST'){
        $error = handleRequest($_FILES['image']);
        if($error){
            throwError($error);
        }
        header("Location: /?controller=gallery&action=Gallery");
        exit();
    }
    $images = getAllImages();
    return render('gallery', ['images' => $images], ['title' =>  ROOT_GALLERY .' :: ' . ROOT_TITLE]);
}