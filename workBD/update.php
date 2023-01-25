<?php
$arrData = $_POST;
$arrData["date"] = "new date";

var_dump($arrData);
    $pdo = new PDO('mysql:host=localhost;dbname=ten','root','');
    $sql = 'UPDATE users SET name=:name, surname=:surname, username=:username, email=:email, date=:date WHERE id=:id';
    $statement = $pdo->prepare($sql);
    $statement->execute($arrData);

    // header('Location: /workBD/index.php')

?>