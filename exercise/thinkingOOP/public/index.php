<?php

include ('../functions.php');
//dd($posts);

//var_dump($_SERVER);

$routes = [
    '/exercise/thinkingOOP/'=>'index.php',
    '/exercise/thinkingOOP/about'=>'functions/about.php',
];

$route = $_SERVER["REQUEST_URI"];
//dd($route);
//var_dump(array_key_exists($route,$routes));

if (array_key_exists($route,$routes)){
    include "../". $routes[$route];
    exit();
}else{
    dd(404);
}




