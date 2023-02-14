<?php
session_start();
/*session_unset();
session_destroy();*/
require ('function.php');

$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password-confirm'];
$id = $_GET['id'];

//var_dump($id);



if (!empty(get_email($email))) {
    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
    redirect('/registerPHP/security.php?id='.$id);
    exit();
}
if ($password !== $passwordConfirm) {
    flesh_message('badPassword', 'Пароли не совпадают');
    redirect('/registerPHP/security.php?id='.$id);
    exit();
}
if ($password == null){
    flesh_message('bad', 'введите пароль');
    redirect('/registerPHP/security.php?id='.$id);
    exit();
}

    edit_user_email_password($email, $password, $id);
    redirect('/registerPHP/users.php');
