<?php


//include_once '../functions.php';
////dd($posts);
//
////var_dump($_SERVER);

include '../classes/bar/Order.php';
include '../classes/too/Order.php';

use Bar\OrderClass\Order as Bar;
use Too\OrderClass\Order as Too;

$class_one = new Bar();
$class_two = new Too();

echo '<hr>';
echo '<hr>';
echo '<hr>';

spl_autoload_register(function ($class) {
    var_dump($class);
//    die();
    include '../classes/' . $class . '.php';
});

$class1 = new ClassOne();
$class2 = new ClassTwo();

echo '<hr>';
echo '<hr>';
echo '<hr>';

//$routes = [
//    '/exercise/thinkingOOP/home'=>'function/homepage.php',
//    '/exercise/thinkingOOP/about'=>'function/about.php',
//];
//
//$route = $_SERVER["REQUEST_URI"];
////dd($route);
////var_dump(array_key_exists($route,$routes));
////var_dump($route);
//
//if (array_key_exists($route,$routes)){
//    include "../" . $routes[$route];
//    exit();
//}else{
//    dd(404);
//}




