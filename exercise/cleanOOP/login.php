<?php
session_start();

require_once ('init.php');


if (Input::exists()) {
    if (Token::check(Input::get('token'))) {
        $validate = new Validate();

        $validation = $validate->check($_POST, [

            'email' => [
                'required' => true,
                'email' => true,
            ],
            'password' => [
                'required' => true,
            ],
        ]);

        if ($validation->passed()) {
            $user = new User();
            $login = $user->login(Input::get('email'),Input::get('password'));

            if ($login){
                echo 'login success';
            }else{
                echo 'login failed';
            }
        } else {
            foreach ($validation->errors() as $error) {
                echo $error . '<br>';
            }
        }
    }
}
?>



<form action="" method="post">
    <div>
        <label for="email">email</label><br>
        <input type="text" name="email" value="<?php echo Input::get('email') ?>">
    </div>
    <div>
        <label for="password">password</label><br>
        <input type="text" name="password">
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <div style="margin-top: 10px">
        <button type="submit">register</button>
    </div>
</form>