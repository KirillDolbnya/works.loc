<?php
session_start();
/*session_unset();
session_destroy();*/

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

$image = $_FILES;
//var_dump(upload_file($file));



$userMail = get_email($email);

if (!empty($userMail)) {
    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
    redirect('/registerPHP/create_user.php');
}elseif($email == null || $password == null ){
    flesh_message('bad','Введите почту и пароль');
    redirect('/registerPHP/create_user.php');
}else{
    add_user($email, $password);
    edit_info($name,$job,$number,$address,$email);
    add_status($status,$email);
    social($vk,$tg,$inst,$email);
    add_file($email,$image);
    flesh_message('good','Пользователь успешно добавлен');
    redirect('/registerPHP/users.php');
}


