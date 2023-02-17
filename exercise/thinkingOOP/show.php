<?php
include ('functions.php');
$id = $_GET['id'];
$db = include ('dataBase/start.php');
$post = $db->getOne('posts',$id);
?>

<h1><?php echo $post['title']?></h1>