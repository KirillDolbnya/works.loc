<?php

function get_email($email)
{
    $pdo = new PDO("mysql:host=localhost;dbname=register;", "root", "");

    $sql = "SELECT email FROM users WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}


function flesh_message($name, $message)
{
    $_SESSION[$name] = $message;
}

function redirect($redirect)
{
    header("Location: {$redirect}");
    exit;
}

function add_user($email, $password)
{
    $pdo = new PDO("mysql:host=localhost;dbname=register;", "root", "");
    $sql = "INSERT INTO users (email , password) VALUES (:email , :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' => $password,
    ]);
}

function login($email, $password)
{
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];

    //var_dump($_SESSION['password']);
    //die();

    $pdo = new PDO("mysql:host=localhost;dbname=register;", "root", "");

    $sql = "SELECT email,password FROM users";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email' => $email,'password'=>$password]);
    $user = $statement->fetchAll(PDO::FETCH_ASSOC);

    if ($user[0]>0){
        if($user == $email && $user == $password){

        }
    }

}
