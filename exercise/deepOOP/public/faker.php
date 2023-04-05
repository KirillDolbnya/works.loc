<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php
require_once "../vendor/autoload.php";

use Aura\SqlQuery\QueryFactory;
use JasonGrimes\Paginator;

$faker = Faker\Factory::create();

$pdo = new PDO("mysql:host=localhost;dbname=app3;", "root", "");
$queryFactory = new QueryFactory('mysql');

echo $title = $faker->jobTitle();
echo $content = $faker->text();


$insert = $queryFactory->newInsert();
$insert->into('posts');
for ($i=0;$i<30;$i++){
    $insert->cols([
        'title' => $title,
        'content' => $content,
    ]);
    $insert->addRow();
}

$sth = $pdo->prepare($insert->getStatement());
$sth->execute($insert->getBindValues());

?>
</body>
</html>