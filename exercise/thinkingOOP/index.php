<?php

include ('functions.php');
//dd($posts);
include ('dataBase/queryBuildre.php');

include ('dataBase/connection.php');

$connection = new Connection();

$pdo=$connection->make();

$db = new QueryBuildre($pdo);

$posts = $db->getAll();


include ('index.view.php');



