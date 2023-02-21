<?php

include_once ('database.php');

$users = Database::Instance()->query("SELECT * FROM users WHERE username IN (?,?,?)",['Tagir','Kirill','Myrat']);

//var_dump($users->count());die();

if ($users->error()) {
    echo 'Ошибка';
}else{
    foreach ($users->result() as $user) {
        echo $user['username'] . "<br>";
    }
}