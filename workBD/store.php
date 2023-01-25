<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$usrname = $_POST['usrname'];
$email = $_POST['email'];

$pdo = new PDO("mysql:host=localhost;dbname=qwerty","root","");
$statement = $pdo->prepare("SELECT * FROM users WHERE emal=:email"); //ЗАПРОС SELECT
$statement->execute(['name'=>$name,'surname'=>$surname,'username'=>$username,'email'=>$email]); //ПОЛУЧИТЬ РЕЗУЛЬТАТ 
$user = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($user)){
    $_SESSION['error'] = 'Этот адрес электронной почты уже занят';
    header('Location: /workBD/create.php');
}



$sql = "INSERT INTO users(name, surname, username, email) VALUES (:name, :surname, :username, :email)";
$statement = $pdo->prepare($sql);
$statement->execute(['name'=>$name,'surname'=>$surname,'username'=>$username,'email'=>$email]);
header('Location: /workBD/index.php');

?>