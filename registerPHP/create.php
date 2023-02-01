<?php
session_start();

require('function.php');

$email = $_POST['email'];
$password = $_POST['password'];

$user = get_email($email);

if (!empty($user)) {
    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
    redirect('/registerPHP/page_register.php');
}

add_user($email, $password);

flesh_message('access', 'Успешно');

redirect('/registerPHP/page_login.php');
