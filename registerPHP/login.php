<?php
session_start();
/*session_unset();
session_destroy();*/
require ('function.php');

$email = $_POST['email'];
$password = $_POST['password'];


$user = login($email);

var_dump($user);

if (empty($user['email'])){
    $_SESSION['incorrect'] = 'Неверный логин или пароль';
    redirect('/registerPHP/page_login.php');
    exit();
}

if (password_verify($password,$user['password']) === false){
    $_SESSION['incorrect'] = 'Неверный логин или пароль';
    redirect('/registerPHP/page_login.php');
    exit();
}

$_SESSION['user'] = $user;

redirect('/registerPHP/users.php');