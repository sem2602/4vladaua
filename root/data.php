<?php

// echo json_encode(['response' => true, 'data' => $_REQUEST]);
// exit;

require_once 'config.php';
require_once 'Model.php';

$method = $_REQUEST['method'];

if(empty($method)){exit;}

$pdo = new PDO("mysql:host=localhost:3306;dbname=".DBNAME.";charset=utf8;", USERNAME, PASSWORD);
$model = new Database($pdo);

$text = $_REQUEST['text'];
$text_en = $_REQUEST['text_en'];
if(!$text){$text = '';}
if(!$text_en){$text_en = '';}

if($method == 'add'){
    
    if($_FILES['file']){
        $uploadfile = 'img/' . time() . $_FILES['file']['name'];
        $result = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
        if($result){
            $model->addPost($text,$text_en, $uploadfile);
        }
    }
    
}

if($method == 'edit'){
    
    $id = $_REQUEST['id'];
    
    if($_FILES['file']){
       $uploadfile = 'img/' . time() . $_FILES['file']['name'];
       $oldFile = $model->getPostById($id);
       $result = move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
       if($result){
           $model->updatePost($id, $text, $text_en, $uploadfile);
           unlink($oldFile['uri']);
       }
    } else {
        $model->updatePost($id, $text, $text_en);
    }
    
}

if($method == 'delete'){
    
    $id = $_REQUEST['id'];
    
    $oldFile = $model->getPostById($id);
    unlink($oldFile['uri']);
    $model->deletePost($id);
    
}


echo json_encode(['response' => true]);