<?php
session_start();

require ('function.php');

$image = $_FILES;
$id = $_POST['id'];


//add_file($image,$id);
//var_dump($image);
add_file($image,$id);
redirect('/registerPHP/users.php');