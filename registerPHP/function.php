<?php
session_start();
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

function login($email , $password){
    $pdo = new PDO('mysql:host=localhost;dbname=register','root', '');
    $sql = "SELECT email FROM users WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email'=>$email]);
    $mail = $statement->fetch(PDO::FETCH_ASSOC);

    $sq = "SELECT password FROM users WHERE password=:password ";
    $state = $pdo->prepare($sq);
    $state->execute(['password'=>$password]);
    $pass = $state->fetch(PDO::FETCH_ASSOC);

    if (!empty($mail) && !empty($pass)){
        header('Location: /registerPHP/page_profile.php');
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        exit();
    }else{
        $_SESSION['incorrect'] = 'Неверный логин или пароль';
        header('Location: /registerPHP/page_login.php');
    }
}
