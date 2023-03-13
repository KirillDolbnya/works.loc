<?php
session_start();

require_once ('init.php');

$user = new User;

$validate = new Validate();
$validate->check($_POST,[
    'current_password' => ['required' => true,],
    'new_password' => ['required' => true , 'min' => 3,],
    'new_password_again' => ['required' => true , 'min' => 3, 'mathes'=>'new_password',],
]);

if (Input::exists()){
    if (Token::check(Input::get('token'))){
        if ($validate->passed()){
            if (password_verify(Input::get('current_password'),$user->data()['password'])){
                $user->update(['password' => password_hash(Input::get('new_password'),  PASSWORD_DEFAULT)]);
                Session::flash('success', 'Password has been update');
                Redirect::to('index.php');
            }else{
                echo "Invalid current password";
            }
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
    <label for="email">current_password</label><br>
    <input type="text" name="current_password">
</div>

    <div>
        <label for="email">new_password</label><br>
        <input type="text" name="new_password">
    </div>

    <div>
        <label for="email">new_password_again</label><br>
        <input type="text" name="new_password_again">
    </div>

<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
<div style="margin-top: 10px">
    <button type="submit">register</button>
</div>
</form>