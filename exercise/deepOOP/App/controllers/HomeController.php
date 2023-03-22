<?php


namespace App\controllers;
use App\QueryBuilder;

//$a = 'dslkhsda';
//d($a);

class HomeController {
    public function index($vars){
        echo 123;exit();
        $db = new QueryBuilder();
//        d($vars);
//        header('Location: public/index.php');
    }
}
//$db = new QueryBuilder();
//
//
//$result = $db->getAll('posts');
//
////var_dump($result);
//$db->update([
//    'title' => 'test update',
//],9,'posts');
//
//echo 'homepage';