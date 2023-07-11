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
require_once "../vendor/autoload.php";

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use League\Plates\Engine;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use DI\ContainerBuilder;
use Delight\Auth\Auth;


//Load Composer's autoloader
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.yandex.ru';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'anton.fargiev@yandex.ru';                     //SMTP username
    $mail->Password   = 'пароль от почты';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('anton.fargiev@yandex.ru', 'Mailer');
    $mail->addAddress('anton.fargiev@yandex.ru', 'Joe User');     //Add a recipient
//    $mail->addAddress('ellen@example.com');               //Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

//die();
// Start a Session
//if( !session_id() ) {
//    session_start();
//}


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
//    require '../App/controller/HomeController.php';
//}
//exit;

// Create new Plates instance
//$templates = new League\Plates\Engine('../App/views');
// Render a template
//echo $templates->render('about',['name'=>'Kirill']);

//echo flash()->display();
//flash()->error(['Invalid email!', 'Invalid username!']);


$containerBuilder = new \DI\ContainerBuilder();
$containerBuilder->addDefinitions([
    Engine::class => function() {
        return new Engine('../App/views');
    },
    PDO::class => function(){
        return new PDO('mysql:dbname=app3;host=localhost;charset=utf8mb4', 'root', '');
    },
    Auth::class => function($container){
        return new Auth($container->get('PDO'));
    }

]);

$container = $containerBuilder->build();
//d($container);die();


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/exercise/deepOOP/home', ['App\controllers\HomeController','index']);
//    $r->addRoute('GET', '/exercise/deepOOP/about/{amount:\d+}', ['App\controller\HomeController','about']);
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
//        var_dump($vars);die();
        $container->call($handler,$vars);
//        d($cont);die();
//        d($containerBuilder);die();
//        $controller = new $handler[0];
//        call_user_func([$controller,$handler[1]],$vars);
        break;
}
?>
</body>
</html>
