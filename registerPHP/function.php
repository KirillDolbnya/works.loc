<?php
session_start();
/*session_unset();
session_destroy();*/
function get_email($email)
{
    $pdo = new PDO("mysql:host=localhost;dbname=register;", "root", "");

    $sql = "SELECT email FROM authUsers WHERE email=:email";
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
    $sql = "INSERT INTO authUsers (email , password) VALUES (:email , :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' => $password,
    ]);
}

function login($email , $password){
    $pdo = new PDO('mysql:host=localhost;dbname=register','root', '');
    $sql = "SELECT email FROM authUsers WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email'=>$email]);
    $mail = $statement->fetch(PDO::FETCH_ASSOC);


    $sq = "SELECT password FROM authUsers WHERE password=:password ";
    $state = $pdo->prepare($sq);
    $state->execute(['password'=>$password]);
    $pass = $state->fetch(PDO::FETCH_ASSOC);


    if (!empty($mail) && !empty($pass)){
        $mysql = 'SELECT * FROM authUsers WHERE email=:email';
        $stat = $pdo->prepare($mysql);
        $stat->execute(['email'=>$email]);
        $user = $stat->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user'] = $user;
        var_dump($_SESSION['user']);
        header('Location: /registerPHP/users.php');

        exit();
    }else{
        $_SESSION['incorrect'] = 'Неверный логин или пароль';
        header('Location: /registerPHP/page_login.php');
        exit();
    }
}



function is_not_logged(){
    if (empty($_SESSION)) {
        header('Location: /registerPHP/page_login.php');
        exit();
    }
}

function examination_role(){
    $pdo = new PDO("mysql:host=localhost;dbname=register;" , "root" , "");
    $sql = "SELECT * FROM authUsers WHERE role='admin'";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $userAdmin = $statement->fetch(PDO::FETCH_ASSOC);
    return $userAdmin;
}

function get_users(){
    $pdo = new PDO("mysql:host=localhost;dbname=register;","root","");
    $sql = "SELECT * FROM authUsers";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function check_id(){
    $pdo = new PDO("mysql:host=localhost;dbname=register;","root","");
    $sql = "SELECT id FROM authUsers";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $id = $statement->fetch(PDO::FETCH_ASSOC);

    return $id;

}






