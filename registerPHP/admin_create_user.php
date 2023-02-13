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
//var_dump($_FILES);



$userMail = get_email($email);

if (!empty($userMail)) {
    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
    redirect('/registerPHP/create_user.php');
}elseif($email == null || $password == null ){
    flesh_message('bad','Введите почту и пароль');
    redirect('/registerPHP/create_user.php');
}else{
    $id = add_user($email, $password);
    edit_info($name,$job,$number,$address,$id);
    add_status($status,$id);
    social($vk,$tg,$inst,$id);
    add_file($image,$id);
    flesh_message('good','Пользователь успешно добавлен');
    redirect('/registerPHP/users.php');
}



