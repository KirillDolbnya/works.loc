<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php
// Start a Session
if( !session_id() ) {
    session_start();
}
require_once "../vendor/autoload.php";
//use App\QueryBuilder;
//$db = new QueryBuilder();
//
//
//$result = $db->getAll('posts');
//
////var_dump($result);
//$db->delete(9,'posts');
//echo 'index';
//echo '<pre>';
//var_dump($_SERVER);
//echo '</pre>';
//
//
//if ($_SERVER['REQUEST_URI'] == '/exercise/deepOOP/public/home'){
//    require '../App/controllers/homepage.php';
//}
//exit;
//
//
// Create new Plates instance
$templates = new League\Plates\Engine('../App/views');

// Render a template
echo $templates->render('homepage',['name'=>'Kirill']);
//
//$test = [
//    'a' => 123,
//    'b' => 456
//];

//d($test);

flash()->message('Hot!');
echo '<p>'. flash()->error(['Invalid email!', 'Invalid username!']) .'</p>';
?>
</body>
</html>
