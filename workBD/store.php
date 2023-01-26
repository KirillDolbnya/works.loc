<?php
session_start();


$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];   

$pdo = new PDO ("mysql:host=localhost;dbname=qwerty;","root","");;
$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$setemail = $statement->fetch(PDO::FETCH_ASSOC);


if(!empty($setemail)){
    header('Location: /workBD/create.php');
    exit;
}

$statement = $pdo->prepare("INSERT INTO users (surname,surname,username,email) VALUES (:name, :surname, :username, :email)");
$statement->execute(['name'=>$name],['surname'=>$surname],['username'=>$username],['email'=>$email]);
header('Location: /workBD/index.php');

?>