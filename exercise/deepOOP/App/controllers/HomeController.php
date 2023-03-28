<?php


namespace App\controllers;
use App\exceptions\NotEnoughMoneyException;
use App\QueryBuilder;
use http\Exception;
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
        try {
            $this->withdraw($vars['amount']);
        }catch (NotEnoughMoneyException $exception){
            flash()->error($exception->getMessage());
        }
        echo $this->templates->render('about',['name'=>'Kirill About']);
    }

    public function withdraw($amount = 1){
        $total = 10;

        if ($amount > $total){
//            throw new \Exception('error');
            throw new NotEnoughMoneyException('Недостаточно средств');
        }
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