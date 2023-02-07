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

/*$_FILES = $_POST['image'];*/
/*$name = $_FILES['name'];
$image = $_FILES['image'];*/

var_dump($_FILES['image']);
exit();

/*var_dump($_POST);
exit();*/

$user = get_email($email);

if (!empty($user)) {
    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
    redirect('/registerPHP/create_user.php');
}elseif($email == null && $password == null ){
    flesh_message('bad','Введите почту и пароль');
    redirect('/registerPHP/create_user.php');
}else{
    add_user($email, $password);
    edit_info($name,$job,$number,$address,$email);
    add_status($status,$email);
    social($vk,$tg,$inst,$email);
    image_profile($image,$email);
    flesh_message('good','Пользователь успешно добавлен');
    redirect('/registerPHP/users.php');
}


