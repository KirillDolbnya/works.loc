<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <input type="text" name="name" class="input">
        <input type="text" name="surname">
        <input type="text" name="username">
        <button type="submit">Добавить</button>
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