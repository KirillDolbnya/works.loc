<?php

include_once ('database.php');

//$users = Database::Instance()->query("SELECT * FROM users WHERE username IN (?,?)",['Tagir','Kirill']);
//$users = Database::Instance()->get('users',['username','=','Tagir']);
//var_dump($users->count());die();

Database::Instance()->insert('users',[
    'username'=>'Marlin',
    'password'=>'qqq',
]);

//if ($users->error()) {
//    echo 'Ошибка';
//}else{
//    foreach ($users->result() as $user) {
//        echo $user['id'] . " " . $user['username'] . "<br>";
//    }
//}
