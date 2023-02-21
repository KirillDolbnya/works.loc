<?php

include_once ('database.php');

//Database::Instance();

$users = Database::Instance()->query("SELECT * FROM users");

//var_dump($users);

if ($users->error()) {
    echo 'Ошибка';
}else{
    foreach ($users->result() as $user) {
        echo $user['username'];
    }

}