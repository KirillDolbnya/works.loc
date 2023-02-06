<?php
session_start();
require ('function.php');

$name = $_POST['name'];
$job = $_POST['job'];
$number = $_POST['number'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];

//$user = get_email($email);

//if (!empty($user)){
//    flesh_message('error', 'Эл. ад. уже занят другим пользователем');
//}

//add_user_admin($name,$job,$number,$address);
//
//add_user($email,$password);
//
//redirect('users.php');