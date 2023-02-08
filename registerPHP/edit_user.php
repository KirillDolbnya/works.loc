<?php
session_start();

require ('function.php');

$name = $_POST['name'];
$job = $_POST['job'];
$number = $_POST['number'];
$address = $_POST['address'];
$email = $_SESSION['email'];






edit_info($name,$job,$number,$address,$email);

redirect('/registerPHP/users.php');


