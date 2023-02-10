<?php
session_start();
/*session_unset();
session_destroy();*/
require ('function.php');

$email = $_POST['email'];
$password = $_POST['password'];


$user = login($email);
//var_dump($_SESSION);

//var_dump($user['password']);

if (empty($user['email'])){
    $_SESSION['incorrect'] = 'Неверный логин или пароль';
    redirect('/registerPHP/page_login.php');
    exit();
}

//if (){
//    $_SESSION['incorrect'] = 'Неверный логин или пароль';
//    redirect('/registerPHP/page_login.php');
//    exit();
//}

//$userPass = $password;
//$hash = password_hash($userPass, PASSWORD_DEFAULT);
//$hash = $user['password'];



if (password_verify($password, $user['password'])) {
    $_SESSION['incorrect'] = 'Неверный логин или пароль';
    redirect('/registerPHP/page_login.php');
    exit();
}

//redirect('/registerPHP/users.php');