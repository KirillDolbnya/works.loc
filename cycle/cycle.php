<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php
            for ($i=1; $i <= 15; $i++) { ?>
                <li>Элемент №<?php echo $i; ?></li>
        <?php } ?>
    </ol>

    <ol>
        <?php
        $a = 1;
            while ($a <= 15) { ?>
            <li>Элемент № <?php echo $a; ?></li>        
        <?php
        $a++;
        } ?>
    </ol>

    <ol>
        <?php
            $n = 1;
            do { ?>
            <li>Элемент № <?php echo $n; ?></li>    
        <?php 
           $n++; } while ($n <= 15); 
        ?>
    </ol>
</body>
</html>