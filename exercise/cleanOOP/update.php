<?php
session_start();

require_once ('init.php');

$user = new User;

$validate = new Validate();
$validate->check($_POST,[
        'username' => ['required' => true , 'min' => 2,'unique' => 'users',]
]);

if (Input::exists()){
    if (Token::check(Input::get('token'))){
        if ($validate->passed()){
            $user->update(['username' => Input::get('username')]);
            Redirect::to('update.php');
        }else{
            foreach ($validate->errors() as $error){
                echo $error . "<br>";
            }
        }
    }
}





?>



<form action="" method="post">
    <div>
        <label for="email">username</label><br>
        <input type="text" name="username" value="<?php echo $user->data()['username'] ?>">
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <div style="margin-top: 10px">
        <button type="submit">register</button>
    </div>
</form>