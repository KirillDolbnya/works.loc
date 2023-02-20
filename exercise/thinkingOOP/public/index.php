<?php

include_once '../functions.php';
//dd($posts);

//var_dump($_SERVER);

$routes = [
    '/exercise/thinkingOOP/home'=>'function/homepage.php',
    '/exercise/thinkingOOP/about'=>'function/about.php',
];

$route = $_SERVER["REQUEST_URI"];
//dd($route);
//var_dump(array_key_exists($route,$routes));
//var_dump($route);

if (array_key_exists($route,$routes)){
    include "../" . $routes[$route];
    exit();
}else{
    dd(404);
}




