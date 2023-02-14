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

    $pdo=connection_bd();
    $sql = "INSERT INTO users (email , password) VALUES (:email , :password)";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email' => $email,
        'password' => password_hash($password,PASSWORD_DEFAULT),
    ]);
    $id = $pdo->lastInsertId();
    return $id;
}


function login($email){
    $pdo=connection_bd();
    $sql = "SELECT * FROM users WHERE email=:email";
    $statement = $pdo->prepare($sql);
    $statement->execute(['email'=>$email]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function is_admin(){
    if ($_SESSION['user']['role'] == 'admin'){
        return true;
    }else{
        return false;
    }
}


function is_not_logged(){
    if (empty($_SESSION)) {
        redirect('/registerPHP/page_login.php');
        exit();
    }
}


function get_all_users(){
    $pdo=connection_bd();
    $sql = "SELECT * FROM users";
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $users = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $users;
}

function edit_info($name,$job,$number,$address,$id){
    $pdo = connection_bd();
    $sql = "UPDATE users SET name=:name,job=:job,number=:number,address=:address WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'name'=> $name,
        'job' => $job,
        'number' => $number,
        'address' => $address,
        'id'=>$id,
    ]);
}

function add_status($status,$id){
    $pdo = connection_bd();
    $sql = "UPDATE users SET status=:status WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'status'=> $status,
        'id'=>$id,
    ]);
}


function add_file($image,$id){
    $result = pathinfo($image['image']['name']);
    $filename = uniqid() . '.' . $result['extension'];
    $profileImage = move_uploaded_file($image['image']['tmp_name'], 'upload/'.$filename);
    var_dump($profileImage);
    $pdo = connection_bd();
    $sql = "UPDATE users SET image=:image WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'image'=> $filename,
        'id'=>$id,
    ]);
}



function social($vk,$tg,$inst,$id){
    $pdo = connection_bd();
    $sql = "UPDATE users SET vk=:vk,tg=:tg,inst=:inst WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'vk'=>$vk,
        'tg'=>$tg,
        'inst'=>$inst,
        'id'=>$id,
    ]);
}

function is_auth(){
    $userID =  $_SESSION['user']['id'];
    return $userID;
}


function getUser(){
    $pdo = connection_bd();
    $sql = "SELECT * FROM users WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    return $user;
}


function edit_user_email_password($email,$password,$id){
    $pdo = connection_bd();
    $sql = "UPDATE users SET email=:email, password=:password WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute([
        'email'=> $email,
        'password' => password_hash($password,PASSWORD_DEFAULT),
        'id'=>$id,
    ]);
}

function delete_user(){
    $pdo = connection_bd();
    $sql = "DELETE FROM users WHERE id=:id";
    $statement = $pdo->prepare($sql);
    $statement->execute($_GET);

}
















