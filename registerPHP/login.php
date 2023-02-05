<?php
session_start();
/*session_unset();
session_destroy();*/
require ('function.php');

$email = $_POST['email'];
$password = $_POST['password'];


login($email,$password);

