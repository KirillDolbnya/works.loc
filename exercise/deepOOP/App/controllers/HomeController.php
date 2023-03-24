<?php


namespace App\controllers;
use App\QueryBuilder;
use League\Plates\Engine;

//$a = 'dslkhsda';
//d($a);

class HomeController {
    private $templates;
    public function __construct()
    {
        $this->templates = new Engine('../App/views');
    }

    public function index($vars){
        $db = new QueryBuilder();
        $posts = $db->getAll('posts');
        echo $this->templates->render('homepage',['postsInView'=>$posts]);
    }
    public function about($vars){
        $this->templates = new Engine('../App/views');
        echo $this->templates->render('about',['name'=>'Kirill About']);
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