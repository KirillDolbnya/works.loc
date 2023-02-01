<?php
session_start();

$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];
  
$pdo = new PDO ("mysql:host=localhost;dbname=ten;","root","");
$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email'=>$email]);
$checkEmail = $statement->fetch(PDO::FETCH_ASSOC);



$error = [
    'error' => [],
    'access' => [],
];




if(!empty($checkEmail)){
    $_SESSION['text'] = 'Пользователь с таким адресом email '. $email .' уже существует';
    $_SESSION['error'][] = $email;
    $_SESSION['bad'] = 'bad';
    header('Location: /workBD/create.php');
    exit;
}else{
    $statement = $pdo->prepare("INSERT INTO users (name,surname,username,email) VALUES (:name, :surname, :username, :email)");
    $statement->execute(['name'=>$name,'surname'=>$surname,'username'=>$username,'email'=>$email]);
    $_SESSION['access'][] = $email;
    $_SESSION['good'] = 'good';
    header('Location: /workBD/index.php');
}

