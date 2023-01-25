<?php

    $pdo = new PDO('mysql:host=localhost;dbname=ten','root','');
    $sql = 'UPDATE users SET name=:name, surname=:surname, username=:username WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);

    header('Location: /workBD/index.php')

?>