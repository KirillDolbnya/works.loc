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

    <ol>
        <li>
            1
            <li>
                2
                <li>3</li>
            </li>
        </li>
    </ol>   

    <p>-------------------------</p>

    <ol>
        <?php 
        for ($i=1; $i <= 5 ; $i++) { ?>
            <ol>
                <li>
                <?php echo  $i; ?>
                    <?php for($a = 1; $a<=5;$a++){ ?>
                        <ol>
                            <li>
                                <?php echo $a; ?>
                                <?php for($n=1; $n<=5;$n++){ ?>
                                    <ol>
                                        <li>
                                            <?php echo $n; ?>
                                        </li>
                                    </ol>
                                <?php } ?>   
                            </li>
                        </ol>    
                    <?php } ?>    
                </li>
            </ol>        
        <?php } ?>
    </ol>
</body>
</html>