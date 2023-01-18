<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="send.php" method="post">
        <input class="number_a"  type="number" name="number_a" placeholder="Введите число a">
        <input class="number_b"  type="number" name="number_b" placeholder="Введите число b">
        <input class="number_c"  type="number" name="number_c" placeholder="Введите число c">
        <button type="submit" name="btn" class="btn">Посчитать</button>
    </form>

    <style>

    .number_a,.number_b,.number_c{
        width: 200px;
        height: 20px;
        background: hotpink;
        color: black;
        border: none;
    }

    .btn{
        width: 100px;
        height: 25px;
        background: hotpink;
        color: black;
        border: none;
    }

    </style>
</body>
</html>