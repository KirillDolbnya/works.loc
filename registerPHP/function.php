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
        header('Location: /registerPHP/users.php');
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['logged'] = "авторизован";
        exit();
    }else{
        $_SESSION['incorrect'] = 'Неверный логин или пароль';
        echo $_SESSION['notLogged'] = "не авторизован";

        die;
        header('Location: /registerPHP/page_login.php');
    }
}

function is_not_logget(){
    if ($_SESSION==['notLogged']){
        header('Location: /registerPHP/page_login.php');
        exit();
    }

}

/*function check_role(){
    $pdo = new PDO('mysql:host=localhost;dbname=register','root', '');
    $sql = "SELECT role FROM users";
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);
    $role_user = $statement->fetchAll(PDO::FETCH_ASSOC);

    if ($role_user == 'admin')

}*/



