<?php
session_start();

require ('function.php');


$status = $_POST['status'];
$id = $_POST['id'];
var_dump($status);


add_status($status,$id);
redirect('/registerPHP/users.php');