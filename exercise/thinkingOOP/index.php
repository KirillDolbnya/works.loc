<?php

include ('functions.php');
//dd($posts);

$db = include ('dataBase/start.php');
$posts = $db->getAll("posts");

include ('index.view.php');



