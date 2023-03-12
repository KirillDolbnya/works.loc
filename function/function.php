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
        function calc($a,$b,$c){

            $dis = ($b*$b)-(4*$a*$c);
                $result = 'Дискриминант равен: '.$dis.'<br>';
            if ($dis > 0) {
                $x1 = (-$b - sqrt($dis) / (2 * $a));
                $x2 = (-$b + sqrt($dis) / (2 * $a));
                $result .= 'x1 раняется: '.$x1.'<br>'.'x2 равняется: '.$x2; 
            }elseif($dis == 0){
                $x1 = -$b / 2 * $a;
                $result .= 'Корень x1 равняется: '.$x1;
            }else{
                $result .= 'Нет корней';
            }
            return $result;
        }

        echo calc(2,4,3);
    ?>
    </p>
</body>
</html>