<?php

$pdo = new PDO("mysql:host=localhost;dbname=qwerty","root","");
$sql = "INSERT INTO users (name) VALUES (:name)";
$statement = $pdo->prepare($sql);
$statement->execute($_POST);



header('Location: /workBD/index.php')
?>