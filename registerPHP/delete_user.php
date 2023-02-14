<?php
session_start();

require ('function.php');

is_not_logged();

$user = getUser();

$edit_id = $user['id'];
$logged_id = $_SESSION['user']['id'];

if (is_admin() !== true && is_auth($logged_id,$edit_id) !== true){
    flesh_message('badly', 'Можно редактировать только свой профиль');
    redirect('/registerPHP/users.php');
    exit();
}

if (is_admin() == true){
    delete_user();
    redirect('/registerPHP/users.php');
}
if (is_auth($logged_id,$edit_id) == true){
    delete_user();
    redirect('/registerPHP/page_register.php');
}