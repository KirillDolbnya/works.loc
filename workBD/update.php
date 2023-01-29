<?php
    $pdo = new PDO("mysql:host=localhost;dbname=qwerty","root","");
    $sql = "UPDATE users SET name=:name, surname=:surname, username=:username, email=:email WHERE id=:id";

    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);
    header('Location: /workBD/index.php');

?>