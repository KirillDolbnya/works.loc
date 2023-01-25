<?php
    $pdo = new PDO("mysql:host=localhost;dbname=qwerty","root","");
    $sql = "UPDATE users SET name=:name, surname=:surname, username=:username, email=:email WHERE id=:id";
    if('email!=email'){
    $statement = $pdo->prepare($sql);
    $statement->execute($_POST);
    header('Location: /workBD/index.php');
    }else{
        header('Location: /workBD/edit.php');
        confirm('Этот адрес электроннойпочты уже занят');
    }
?>