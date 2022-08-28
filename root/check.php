<?php
session_start();


require_once 'Model.php';
require_once 'config.php';

$pdo = new PDO("mysql:host=localhost:3306;dbname=".DBNAME.";charset=utf8;", USERNAME, PASSWORD);

if($_POST['login'] && $_POST['password']){
    $pass = md5(md5($_POST['password']));
    
    $model = new Database($pdo);
	
	$result = $model->getUser($_POST['login'], $pass);
	
    if($result){
        $_SESSION['auth'] = true;
        header("Location:./");
    } else {
        $_SESSION['error'] = 'Не верный логин или пароль!';
        header("Location:./");
    }
	
    echo var_dump($result);
}
?>