<?php
var_dump($_POST);

include ('functions.php');
$db = include ('dataBase/start.php');

$db->create();