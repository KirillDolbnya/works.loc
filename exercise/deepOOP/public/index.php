<?php
require_once "../vendor/autoload.php";
use App\QueryBuilder;
$db = new QueryBuilder();


$result = $db->getAll('posts');

//var_dump($result);
$db->insert([
    'title' => 'test one',
],'posts');