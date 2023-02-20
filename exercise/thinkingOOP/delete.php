<?php
include ('functions.php');
$db = include ('dataBase/start.php');
$db->delete('posts',$_GET['id']);
header('Location: index.php');