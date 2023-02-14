<?php
session_start();

require ('function.php');

$image = $_FILES;
$id = $_POST['id'];
$getID = $_GET['id'];


add_file($image,$id);
redirect('/registerPHP/page_profile.php'.$getID);