<?php
session_start();

require_once ('init.php');




//$users = Database::Instance()->query("SELECT * FROM users WHERE username IN (?,?)",['Tagir','Kirill']);
//$users = Database::Instance()->get('users',['username','=','Tagir']);
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

//echo $users->result()[0]['username'];
//echo $users->first();

?>


<form action="" method="post">

    <?php //echo Session::flash('success'); ?>

    <div>
        <label for="username">username</label><br>
        <input type="text" name="username" value="<?php echo Input::get('username') ?>">
    </div>
    <div>
        <label for="email">email</label><br>
        <input type="text" name="email">
    </div>
    <div>
        <label for="password">password</label><br>
        <input type="text" name="password">
    </div>
    <div>
        <label for="repeat_password">repeat password</label><br>
        <input type="text" name="repeat_password">
    </div>
    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <div style="margin-top: 10px">
        <button type="submit">register</button>
    </div>
</form>
