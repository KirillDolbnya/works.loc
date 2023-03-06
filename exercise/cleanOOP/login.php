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
            $remember = (Input::get('remember')) === 'on' ? true : false;
            $login = $user->login(Input::get('email'),Input::get('password'), $remember);

            if ($login){
                echo 'login success';
                Redirect::to('index.php');
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

    <div class="remember">
        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <div style="margin-top: 10px">
        <button type="submit">register</button>
    </div>
</form>