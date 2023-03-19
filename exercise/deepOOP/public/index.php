<?php
require_once "../vendor/autoload.php";
use App\QueryBuilder;
$db = new QueryBuilder();


$result = $db->getAll('posts');

//var_dump($result);
$db->update([
    'title' => 'test update',
],9,'posts');

//if ($_SERVER['REQUEST_URI'] == 'home'){
//    require '../app/controllers/homepage.php';
//}
//exit;
