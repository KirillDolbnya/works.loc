<?php
session_start();

require ('function.php');

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$job = $_POST['job'];
$number = $_POST['number'];
$address = $_POST['address'];

$status = $_POST['status'];


$vk = $_POST['vk'];
$tg = $_POST['tg'];
$inst = $_POST['inst'];

/*var_dump($_POST);
exit();*/

$user = get_email($email);

if (!empty($user)) {
    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
    redirect('/registerPHP/create_user.php');
}else {
    add_user($email, $password);
    edit_info($name,$job,$number,$address,$email);
    add_status($status,$email);
    social($vk,$tg,$inst,$email);
}

redirect('/registerPHP/create_user.php');

