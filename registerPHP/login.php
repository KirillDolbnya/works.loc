<?php
session_start();

require ('function.php');

$email = $_SESSION['email'];
$password = $_SESSION['password'];

login($email,$password);

