<?php
session_start();

require ('function.php');


$status = $_POST['status'];
$id = $_POST['id'];
$getID = $_GET['id'];
var_dump($status);


add_status($status,$id);
redirect('/registerPHP/page_profile.php'.$getID);