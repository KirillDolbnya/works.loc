<?php
session_start();
/*session_unset();
session_destroy();*/
require ('function.php');

$email = $_POST['email'];
$password = $_POST['password'];
$passwordConfirm = $_POST['password-confirm'];

$userID = getUser();

$id = $userID['id'];

//print_r($userID);
//print_r($_POST);


$user = get_email($email);
if (!empty($user)) {
    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
    redirect('/registerPHP/security.php');
    exit();
}

edit_user_email_password($email,$password,$id);
redirect('/registerPHP/page_profile.php');