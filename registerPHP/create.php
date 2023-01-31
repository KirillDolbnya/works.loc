<?php

$email = 'kirill123@gmail.com';
$password = 'secret';

$pdo = new PDO("mysql:host=localhost;dbname=register;", "root" , "" );

$sql = "SELECT email FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($user);die;



$sql = "INSERT INTO users (email , password) VALUES (:email , :password)";
$statement = $pdo->prepare($sql);
$statement->execute([
    'email' => $email,
    'password' => $password
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);
?>