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


    $pdo = new PDO ("mysql:host=localhost;dbname=ten;","root",""); //СОЕДИНЕНИЕ С БАЗОЙ ДАННЫХ
    $statement = $pdo->prepare("SELECT * FROM users WHERE id=:id"); //ЗАПРОС SELECT
    $statement->execute($_GET); //ПОЛУЧИТЬ РЕЗУЛЬТАТ 
    $user = $statement->fetch(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER

    ?>



    <h1>User</h1>

    <p>Добро пожаловать <?php echo $user['name'].' '.$user['surname'] ?></p>
    <p>Ваш id: <?php echo $user['id'] ?></p>
    <p>Ваш email: <?php echo $user['email'] ?></p>
    <p>Дата редактирования: <?php echo $user['dateEdit'] ?></p>

    <style>

        .create__btn{
            padding: 10px;
            background: green;
            color: white;
        }
        
        a{
            text-decoration: none;
        }

        .btn__show{
            padding: 10px;
            background: blue;
            color: white;
        }

        .btn__edit{
            padding: 10px;
            background: orange;
            color: white;
        }

        .btn__delete{
            padding: 10px;
            background: red;
            color: white;
        }

        table{
            margin-top: 10px;
            border: 1px solid black;
        }

        td{
            padding: 10px;
        }

    </style>
</body>
</html>