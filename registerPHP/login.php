<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];


$pdo = new PDO("mysql:host=localhost;dbname=register;", "root", "");
$sql = "SELECT email FROM users WHERE email=:email , password=:password";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email,'password'=>$password]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($user);
exit;

if ($user !== $email) {
    header('Location: /registerPHP/page_login.php');
    $_SESSION['incorrect'] = 'Неверный логин или пароль';
}
header('Location: /registerPHP/page_profile.php');
//$_SESSION['incorrect'] = 'Неверный логин или пароль';
