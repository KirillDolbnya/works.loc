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


    $pdo = new PDO ("mysql:host=localhost;dbname=qwerty;","root",""); //СОЕДИНЕНИЕ С БАЗОЙ ДАННЫХ
    $statement = $pdo->prepare("SELECT * FROM users"); //ЗАПРОС SELECT
    $statement->execute(); //ПОЛУЧИТЬ РЕЗУЛЬТАТ 
    $users = $statement->fetchAll(PDO::FETCH_ASSOC); //ПЕРЕДАЕМ ДАННЫЕ В ПЕРЕМЕННУЮ USER
    ?>


    <h1>Users</h1>
    <a class="create__btn" href="create.php">Create</a>
        <div>
            <div>
                <table>
                    <thead>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                    </thead>
                    <?php foreach ($users as $user => $value) {?>
                        <tbody class="tbody">
                            <tr>
                                <td><?php echo $value['id'] ?></td>
                                <td><?php echo $value['name'] ?></td>
                                <td><?php echo $value['email'] ?></td>
                                <td>
                                <a class="btn__show" href="#">Show</a>
                                <a class="btn__edit" href="#">Edit</a>
                                <a class="btn__delete" href="#">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>

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