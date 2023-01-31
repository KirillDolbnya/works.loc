<?php

$pdo = new PDO ("mysql:host=localhost;dbname=ten;","root",""); 
$statement = $pdo->prepare("DELETE FROM users WHERE id=:id");
$statement->execute($_GET);

header('Location: /workBD/index.php')
?>