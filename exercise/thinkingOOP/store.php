<?php
//var_dump($_POST);

include ('functions.php');
$db = include ('dataBase/start.php');

$db->create('posts', [
    'title'=>$_POST['title'],
]);

header('Location: index.php');