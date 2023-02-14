<?php
session_start();

require ('function.php');

$name = $_POST['name'];
$job = $_POST['job'];
$number = $_POST['number'];
$address = $_POST['address'];
$id = $_POST['id'];

$getID = $_GET['id'];

//$email = $_SESSION['email'];


edit_info($name,$job,$number,$address,$id);

redirect("/registerPHP/page_profile.php".$getID);


