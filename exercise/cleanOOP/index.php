<?php
//session_start();
require_once ('init.php');

//var_dump(Session::get(Config::get('session.user_session')));

$user = new User;
//$anotherUser = new User(20);
//var_dump($user->isLoggedIn());
if ($user->isLoggedIn()){
    echo "Привет,  <a href='#'>{$user->data()['username']}</a>  ,вы авторизоват";
    echo "<br><a href='logaut.php'>Выйти</a>";
}else{
    echo "<a href='login.php'>Войти  </a> или <a href='register.php'>  Зарегистрироваться</a>";
}

