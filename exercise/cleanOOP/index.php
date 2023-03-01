<?php
session_start();

include_once('config.php');
include_once('database.php');
include_once('input.php');
include_once('validate.php');
include_once('session.php');
include_once('token.php');
include_once ('user.php');
include_once ('redirect.php');


$GLOBALS['config'] = [
    'mysql' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => 'marlinOOP',
        'something' => [
            'no' => [
                'foo' => [
                    'bar' => 'baz',
                ],
            ],
        ],
    ],
    'session' => [
        'token_name' => 'token',
    ]
];

if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();

        $validation = $validate->check($_POST, [
            'username' => [
                'required' => true,
                'min' => 2,
                'max' => 15,
                'unique' => 'users',
            ],
            'password' => [
                'required' => true,
                'min' => 3,
            ],
            'repeat_password' => [
                'required' => true,
                'mathes' => 'password',
            ]
        ]);

        if ($validation->passed()) {
            $user = new User();

            $user->create([
                    'username' => Input::get('username'),
                    'password' => password_hash(Input::get('password') , PASSWORD_DEFAULT),
            ]);
            Session::flash('success', 'register success');
            Redirect::to('test.php');
            //Redirect::to(404);
        } else {
            foreach ($validation->errors() as $error) {
                echo $error . '<br>';
            }
        }
    }
}

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

    <?php echo Session::flash('success'); ?>

    <div>
        <label for="username">username</label><br>
        <input type="text" name="username" value="<?php echo Input::get('username') ?>">
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
