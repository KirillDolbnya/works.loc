<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">-->
</head>
<body>
<?php
// Start a Session
if( !session_id() ) {
    session_start();
}

require_once "../vendor/autoload.php";
use Illuminate\Support\Arr;


$array = [
        ['marlin' => ['course' => 'HTML']],
        ['marlin' => ['course' => 'PHP']]
];

//var_dump($array);
$result = Arr::pluck($array,'marlin.course');
var_dump($result);


echo '<hr>';
echo '<hr>';
echo '<hr>';
echo '<hr>';

//use App\QueryBuilder;
//$db = new QueryBuilder();
//$result = $db->getAll('posts');
////var_dump($result);
//$db->delete(9,'posts');
//echo 'index';
//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';

//if ($_SERVER['REQUEST_URI'] == '/exercise/deepOOP/public/home'){
//    require '../App/controllers/HomeController.php';
//}
//exit;

// Create new Plates instance
//$templates = new League\Plates\Engine('../App/views');
// Render a template
//echo $templates->render('about',['name'=>'Kirill']);

//echo flash()->display();
//flash()->error(['Invalid email!', 'Invalid username!']);



$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/exercise/deepOOP/home', ['App\controllers\HomeController','index']);
//    $r->addRoute('GET', '/exercise/deepOOP/about/{amount:\d+}', ['App\controllers\HomeController','about']);
    $r->addRoute('GET', '/exercise/deepOOP/about', ['App\controllers\HomeController','about']);
    $r->addRoute('GET', '/exercise/deepOOP/verification', ['App\controllers\HomeController','email_verification']);
    $r->addRoute('GET', '/exercise/deepOOP/login', ['App\controllers\HomeController','login']);

//    $r->addRoute('GET', '/user/{id:\d+}', 'get_user_handler');
//    $r->addRoute('GET', '/articles/{id:\d+}[/{title}]', 'get_article_handler');
});


// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        echo 404;
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo 405;
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $controller = new $handler[0];
        call_user_func([$controller,$handler[1]],$vars);
        break;
}
?>
</body>
</html>
