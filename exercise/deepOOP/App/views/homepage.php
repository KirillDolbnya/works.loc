<h2>Начало</h2>
<?php $this->layout('layout', ['title' => 'User Profile']) ?>
<h1>User profile</h1>
<p><?php foreach ($postsInView

    as $post){ ?></p>
    <p><?php echo $post['title'] ?></p>
<?php } ?>
<h2>Конец</h2>
<?php


//use App\QueryBuilder;
$db = new PDO('mysql:dbname=app3;host=localhost;charset=utf8mb4', 'root', '');

//$auth = new QueryBuilder();
//var_dump($auth);die();

$auth = new Delight\Auth\Auth($db);
$name = 'Kirill2';
$email = 'qwerty2@gmail.com';
$password = '1234';

try {
    $userId = $auth->register($email, $password, $name,  function ($selector, $token) {
        echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
        echo '  For emails, consider using the mail(...) function, Symfony Mailer, Swiftmailer, PHPMailer, etc.';
        echo '  For SMS, consider using a third-party service and a compatible SDK';
    });

    echo 'We have signed up a new user with the ID ' . $userId;
}
catch (Delight\Auth\InvalidEmailException $e) {
    die('Invalid email address');
}
catch (Delight\Auth\InvalidPasswordException $e) {
    die('Invalid password');
}
catch (Delight\Auth\UserAlreadyExistsException $e) {
    die('User already exists');
}
catch (Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}
?>