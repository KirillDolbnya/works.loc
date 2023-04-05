<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php
require_once "../vendor/autoload.php";

use Aura\SqlQuery\QueryFactory;
use JasonGrimes\Paginator;

$faker = Faker\Factory::create();

$pdo = new PDO("mysql:host=localhost;dbname=app3;", "root", "");
$queryFactory = new QueryFactory('mysql');

//echo $title = $faker->jobTitle();
//echo $content = $faker->text();


//$insert = $queryFactory->newInsert();
//$insert->into('posts');
//for ($i=0;$i<30;$i++){
//    $insert->cols([
//        'title' => $title,
//        'content' => $content,
//    ]);
//    $insert->addRow();
//}
//
//$sth = $pdo->prepare($insert->getStatement());
//$sth->execute($insert->getBindValues());


$select = $queryFactory->newSelect();
$select
    ->cols(['*'])
    ->from('posts');
$sth = $pdo->prepare($select->getStatement());
$sth->execute($select->getBindValues());
$totalItems = $sth->fetchAll(PDO::FETCH_ASSOC);

$select = $queryFactory->newSelect();
$select
    ->cols(['*'])
    ->from('posts')
    ->setPaging(3)
    ->page($_GET['page'] ?? 1);

$sth = $pdo->prepare($select->getStatement());
$sth->execute($select->getBindValues());
$items = $sth->fetchAll(PDO::FETCH_ASSOC);


//foreach ($items as $item => $value){
//    echo '<p>'.$value['title'].' это title</p>';
//    echo '<p>'.$value['content'].' это content</p>';
//}

$itemsPerPage = 3;
$currentPage = $_GET['page'] ?? 1;
$urlPattern = '?page=(:num)';

$paginator = new Paginator(count($totalItems), $itemsPerPage, $currentPage, $urlPattern);
foreach ($items as $item) {
    echo $item['id'] . PHP_EOL . $item['title'] . '<br>';
}

?>

<ul class="pagination">
    <?php if ($paginator->getPrevUrl()): ?>
        <li><a href="<?php echo $paginator->getPrevUrl(); ?>">&laquo; Previous</a></li>
    <?php endif; ?>

    <?php foreach ($paginator->getPages() as $page): ?>
        <?php if ($page['url']): ?>
            <li <?php echo $page['isCurrent'] ? 'class="active"' : ''; ?>>
                <a href="<?php echo $page['url']; ?>"><?php echo $page['num']; ?></a>
            </li>
        <?php else: ?>
            <li class="disabled"><span><?php echo $page['num']; ?></span></li>
        <?php endif; ?>
    <?php endforeach; ?>

    <?php if ($paginator->getNextUrl()): ?>
        <li><a href="<?php echo $paginator->getNextUrl(); ?>">Next &raquo;</a></li>
    <?php endif; ?>
</ul>

<p>
    <?php echo $paginator->getTotalItems(); ?> found.

    Showing
    <?php echo $paginator->getCurrentPageFirstItem(); ?>
    -
    <?php echo $paginator->getCurrentPageLastItem(); ?>.
</p>
</body>
</html>