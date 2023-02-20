<?php

include ('functions.php');
$db = include ('dataBase/start.php');
$posts = $db->getAll("posts");

include ('index.view.php');
