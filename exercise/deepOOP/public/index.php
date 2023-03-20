<?php
require_once "../vendor/autoload.php";
//use App\QueryBuilder;
//$db = new QueryBuilder();
//
//
//$result = $db->getAll('posts');
//
////var_dump($result);
//$db->delete(9,'posts');
echo 'index';
//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';


if ($_SERVER['REQUEST_URI'] == '/exercise/deepOOP/public/home'){
    require '../App/controllers/homepage.php';
}
exit;
