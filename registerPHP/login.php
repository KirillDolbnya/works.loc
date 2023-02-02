<?php
session_start();
require ('function.php');

require ('function.php');

$email = $_SESSION['email'];
$password = $_SESSION['password'];

<<<<<<< HEAD
login($email,$password);

=======
/*var_dump($email,$password);*/

login($email,$password);


>>>>>>> origin/main
