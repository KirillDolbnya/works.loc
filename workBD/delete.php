<?php

$pdo = new PDO ("mysql:host=localhost;dbname=qwerty;","root",""); 
$statement = $pdo->prepare("DELETE FROM users WHERE id=:id");
$statement->execute($_GET);

header('Location: /workBD/index.php')
?>