<?php
session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];

  
$pdo = new PDO ("mysql:host=localhost;dbname=ten;","root","");
$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$email = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty)



$statement = $pdo->prepare("INSERT INTO users (name,surname,username,email) VALUES (:name, :surname, :username, :email)");
$statement->execute($_POST);
header('Location: /workBD/index.php');

?>