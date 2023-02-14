<?php
session_start();

require ('function.php');

is_not_logged();

$user = getUser();

$profileID = $_GET["id"];


if (!is_admin() && is_auth() !== $profileID){
    flesh_message('badly', 'Можно редактировать только свой профиль');
    redirect('/registerPHP/users.php');
    exit();
}

if (is_admin()){
    delete_user();
    redirect('/registerPHP/users.php');
}

if (is_auth() == $profileID){
    delete_user();
    redirect('/registerPHP/page_register.php');
}
