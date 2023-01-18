<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $a = $_POST["number_a"].'<br>';
            $b = $_POST["number_b"].'<br>';
            $c = $_POST["number_c"].'<br>';
            $dis = ($b*$b)-(4*$a*$c);
            echo 'Дискриминант равняется: '.$dis.'<br>';
            if($dis < 0){
                echo 'Нет корней';
            }elseif($dis == 0){
                $x1 = -$b / 2 * $a;
                echo 'Корень x1 равняется: '.$x1;
            }else{
                $x1 = (-$b - sqrt($dis) / (2 * $a));
                $x2 = (-$b + sqrt($dis) / (2 * $a));
                echo 'x1 раняется: '.$x1.'<br>'.'x2 равняется: '.$x2;
            }
        ?>
    </p>

    <style>
        body{
            background: yellow;
            color: white;
        }

    </style>
</body>
</html>