<?php

$pdo = new PDO("mysql:host=localhost;dbname=ten","root","");
$sql = "INSERT INTO users (name, surname, username) VALUES (:name , :surname , :username)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);



header('Location: /workBD/index.php')
?>