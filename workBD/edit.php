<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$pdo = new PDO ("mysql:host=localhost;dbname=ten;","root","");
$statement = $pdo->prepare("SELECT * FROM users WHERE id=:id");
$statement->execute($arrData);
$user = $statement->fetch(PDO::FETCH_ASSOC);

?>

<h2>Edit</h2>
<form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        <input class="input" placeholder="Введите имя" type="text" name="name" class="input" value="<?php echo $user['name'] ?>">
        <input class="input" placeholder="Введите фамилию" type="text" name="surname" value="<?php echo $user['surname'] ?>">
        <input class="input" placeholder="Введите имя пользователя" type="text" name="username" value="<?php echo $user['username'] ?> ">
        <input class="input" placeholder="Введите ваш email"  type="text" name="email" value="<?php echo $user['email'] ?> ">
        <button type="submit">edit user</button>
    </form>

    <style>
        .input{
            padding: 5px;
        }

        button{
            color: white;
            padding: 10px;
            background: blue;
            border: none;
        }
    </style>
</body>
</html>