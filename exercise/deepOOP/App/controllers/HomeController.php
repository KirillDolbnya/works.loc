<?php
//test push git

namespace App\controllers;
use App\exceptions\NotEnoughMoneyException;
use App\QueryBuilder;
use http\Exception;
use League\Plates\Engine;
use Delight;
use PDO;

//$a = 'dslkhsda';
//d($a);

class HomeController {
    private $templates;
    private $auth;
    public function __construct()
    {
        $this->templates = new Engine('../App/views');
        $db = new PDO('mysql:dbname=app3;host=localhost;charset=utf8mb4', 'root', '');
        $this->auth = new Delight\Auth\Auth($db);
    }

    public function index($vars){
//        var_dump($this->auth->getUsername());die();
//        $this->auth->logOut();echo 'eee';die();
        echo $this->auth->getUsername();
        $db = new QueryBuilder();
        $posts = $db->getAll('posts');
        echo $this->templates->render('homepage',['postsInView'=>$posts]);
    }
    public function about($vars){
//        try {
//            $this->withdraw($vars['amount']);
//        }catch (NotEnoughMoneyException $exception){
//            flash()->error($exception->getMessage());
//        }
//        echo $this->templates->render('about',['name'=>'Kirill About']);


        $name = 'Kirill4';
        $email = 'qwerty4@gmail.com';
        $password = '1234';

        try {
            $userId = $this->auth->register($email, $password, $name,  function ($selector, $token) {
                echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
                echo '  For emails, consider using the mail(...) function, Symfony Mailer, Swiftmailer, PHPMailer, etc.';
                echo '  For SMS, consider using a third-party service and a compatible SDK';
            });

            echo 'We have signed up a new user with the ID ' . $userId;
        }
        catch (Delight\Auth\InvalidEmailException $e) {
            die('Invalid email address');
        }
        catch (Delight\Auth\InvalidPasswordException $e) {
            die('Invalid password');
        }
        catch (Delight\Auth\UserAlreadyExistsException $e) {
            die('User already exists');
        }
        catch (Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }



    public function email_verification(){
        try {
            $this->auth->confirmEmail('ivlGsuf7VslpEgpd', '8vXmpg1WVO9IAAXR');

            echo 'Email address has been verified';
        }
        catch (Delight\Auth\InvalidSelectorTokenPairException $e) {
            die('Invalid token');
        }
        catch (Delight\Auth\TokenExpiredException $e) {
            die('Token expired');
        }
        catch (Delight\Auth\UserAlreadyExistsException $e) {
            die('Email address already exists');
        }
        catch (Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

    public function login(){
        try {
            $this->auth->login('qwerty4@gmail.com', '1234');

            echo 'User is logged in';
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            die('Email not verified');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

//    public function withdraw($amount = 1){
//        $total = 10;
//
//        if ($amount > $total){
////            throw new \Exception('error');
//            throw new NotEnoughMoneyException('Недостаточно средств');
//        }
//    }
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