<?php


namespace App\controllers;
use App\QueryBuilder;
use League\Plates\Engine;

//$a = 'dslkhsda';
//d($a);

class HomeController {
    private $templates;
    public function index($vars){
        $templates = new Engine('../App/views');
        echo $templates->render('homepage',['name'=>'Kirill']);
    }
    public function about($vars){
        $templates = new Engine('../App/views');
        echo $templates->render('about',['name'=>'Kirill About']);
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