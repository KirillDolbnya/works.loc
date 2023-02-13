<?php
session_start();
/*session_unset();
session_destroy();*/
require ('function.php');

$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password-confirm'];
$id = $_POST['id'];

//$userID = getUser();
//
//$id = $userID['id'];
//var_dump($id);

var_dump($_SESSION);

$user = get_email($email);
if (!empty($user)) {
    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
    redirect('/registerPHP/security.php');
}
if ($password !== $passwordConfirm) {
    flesh_message('badPassword', 'Пароли не совпадают');
    redirect('/registerPHP/security.php');
}
if ($password == null){
    flesh_message('bad', 'введите пароль');
    redirect('/registerPHP/security.php');
}

    edit_user_email_password($email, $password, $id);
    redirect('/registerPHP/users.php');
