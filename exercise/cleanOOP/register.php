<?php
session_start();

require_once ('init.php');


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
            'email' => [
                'required' => true,
                'email' => true,
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
                'email' => Input::get('email')
            ]);
            Session::flash('success', 'register success');
            Redirect::to('login.php');
//            Redirect::to(404);
        } else {
            foreach ($validation->errors() as $error) {
                echo $error . '<br>';
            }
        }
    }
}

?>


<form action="" method="post">

    <?php echo Session::flash('success'); ?>

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
