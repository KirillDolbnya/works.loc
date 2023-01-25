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
$statement->execute($_GET);
$user = $statement->fetch(PDO::FETCH_ASSOC);

?>


<form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        <input type="text" name="name" class="input" value="<?php echo $user['name'] ?>">
        <input type="text" name="surname" value="<?php echo $user['surname'] ?>">
        <input type="text" name="username" value="<?php echo $user['username'] ?> ">
        <button type="submit">edit user</button>
    </form>

    <style>
        .input{
            padding: 10px;
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