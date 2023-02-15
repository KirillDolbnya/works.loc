<?php
 function dd($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    exit();
 }

function getAllPosts($pdo){
    $sql = 'SELECT * FROM posts';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $posts;
}