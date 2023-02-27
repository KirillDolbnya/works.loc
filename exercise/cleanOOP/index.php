<?php

include_once ('database.php');

//$users = Database::Instance()->query("SELECT * FROM users WHERE username IN (?,?)",['Tagir','Kirill']);
$users = Database::Instance()->get('users',['username','=','Tagir']);
//var_dump($users->count());die();

//$id = 3;
//$users = Database::Instance()->update('users',$id,[
//    'username' => 'Marlin1',
//    'password'=> '123',
//]);

//if ($users->error()) {
//    echo 'Ошибка';
//}else{
//    foreach ($users->result() as $user) {
//        echo $user['id'] . " " . $user['username'] . "<br>";
//    }
//}

//echo $users->result()[0]['password'];
//echo $users->first()['username'];
