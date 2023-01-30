<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Create</h2>

    <?php if(isset($_SESSION['text'])){ ?>
        <div><?php echo $_SESSION['text']; ?></div>
        <?php unset($_SESSION['text']) ?>
    <?php }; ?>    

    <form action="store.php" method="post">
        <input placeholder="Введите имя" type="text" name="name" class="input">
        <input placeholder="Введите фамилию" type="text" name="surname" class="input">
        <input placeholder="Введите имя пользователя" type="text" name="username" class="input">
        <input placeholder="Введите ваш email" type="text" name="email" class="input">
        <button type="submit">Добавить</button>
    </form>
    <div>
    <?php

    $error = $_SESSION['error'];
    $access = $_SESSION['access'];
    $bad = $_SESSION['bad'];
    $good = $_SESSION['good'];

   //var_dump($error);
   //var_dump($access);

    if(!empty($error)){
        foreach($error as $values){ ?>
            <p class = "<?php echo $bad; ?>"><?php echo $values; ?></p>
    <?php 
            };
        }; 
    ?>

    <?php 
    
    if(!empty($access)){
        foreach($access as $values){ ?>
            <p class = "<?php echo $good; ?>"><?php echo $values; ?></p>
    <?php 
            }; 
        }; 
    ?>
    </div>
 
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

        .good{
            color: green;
        }

        .bad{
            color: red;
        }

    </style>

</body>
</html>