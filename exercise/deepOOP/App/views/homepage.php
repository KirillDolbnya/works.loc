<h2>Начало</h2>
<?php $this->layout('layout', ['title' => 'User Profile']) ?>
<h1>User profile</h1>
<p><?php foreach ($postsInView as $post){?></p>
<p><?php echo $post['title'] ?></p>
<?php } ?>
<h2>Конец</h2>