<?php
session_start();
/*session_unset();
session_destroy();*/

function connection_bd(){
    $pdo = new PDO("mysql:host=localhost;dbname=register;", "root", "");
    return $pdo;
}

function get_email($email)
{
    $pdo=connection_bd();
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
    /*$password_hash = password_hash($password , PASSWORD_DEFAULT);*/
    $pdo=connection_bd();
    $sql = "INSERT INTO users (email , password) VALUES (:email , :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' => password_hash($password,PASSWORD_DEFAULT),
    ]);
}

function login($email){
    $pdo=connection_bd();
    $sql = "SELECT * FROM users WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email'=>$email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;

//    if (!empty($mail) && !empty($pass)){
//        $mysql = 'SELECT * FROM users WHERE email=:email';
//        $stat = $pdo->prepare($mysql);
//        $stat->execute(['email'=>$email]);
//        $user = $stat->fetch(PDO::FETCH_ASSOC);
//        $_SESSION['user'] = $user;
//        var_dump($_SESSION['user']);
//        redirect('/registerPHP/users.php');
//
//        exit();
//    }else{
//        $_SESSION['incorrect'] = 'Неверный логин или пароль';
//        redirect('/registerPHP/page_login.php');
//        exit();
//    }
}



function is_not_logged(){
    if (empty($_SESSION)) {
        redirect('/registerPHP/page_login.php');
        exit();
    }
}


function get_users(){
    $pdo=connection_bd();
    $sql = "SELECT * FROM users";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function edit_info($name,$job,$number,$address,$email){
    $pdo = connection_bd();
    $sql = "UPDATE users SET name=:name,job=:job,number=:number,address=:address WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'name'=> $name,
        'job' => $job,
        'number' => $number,
        'address' => $address,
        'email'=>$email,
    ]);
}

function add_status($status,$email){
    $pdo = connection_bd();
    $sql = "UPDATE users SET status=:status WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'status'=> $status,
        'email'=>$email,
    ]);
}

function upload_file($file){
    $result = pathinfo($file['image']['name']);
    $filename = uniqid() . '.' . $result['extension'];
    move_uploaded_file($file['image']['tmp_name'], 'upload/'.$filename);
}

/*function add_file($email , $image){
    $pdo = connection_bd();
    $sql = "UPDATE users SET image=:image WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'image'=> $image,
        'email'=>$email,
    ]);
}*/

function social($vk,$tg,$inst,$email){
    $pdo = connection_bd();
    $sql = "UPDATE users SET vk=:vk,tg=:tg,inst=:inst WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'vk'=>$vk,
        'tg'=>$tg,
        'inst'=>$inst,
        'email'=>$email,
    ]);
}


function getUser(){
    $pdo = connection_bd();
    $sql = "SELECT * FROM users WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}

//function thisUser(){
//
//}





function edit_user_email_password($email,$password,$id){
    $pdo = connection_bd();
    $sql = "UPDATE users SET email=:email, password=:password WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email'=> $email,
        'password' => $password,
        'id'=>$id,
    ]);
}
















