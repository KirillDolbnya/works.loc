<?php
//session_start();
include_once('init.php');

//var_dump(Session::get(Config::get('session.user_session')));

$user = new User;
//$anotherUser = new User(20);
//var_dump($user->isLoggedIn());
if ($user->isLoggedIn()){
    echo "Hi ,  <a href='#'>{$user->data()['username']}</a>";
    echo "<br><a href='logout.php'>Выйти</a>";
    echo "<br><a href='update.php'>Обновить профиль</a>";
}else{
    echo "<a href='login.php'>Войти  </a> или <a href='register.php'>  Зарегистрироваться</a>";
}

