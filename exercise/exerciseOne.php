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
    $title = 'Первый заголовок статьи';

    $text = 'Описание для статьи, чтобы рассказать о чем будет в статье в кратце.
    Здесь абсолютно комфортно вы можете генерировать тексты-«рыбы» для решения задач в области макетирования.';

    $text2 = 'Мы будем постепенно расширять функциональность нашего сайта и ждем с нетерпением ваших отзывов.Присылайте нам ваши рыбные тексты! Мы будем рады!';

    $titleTwo = 'Второй заголовок статьи';

    $text3 = 'Описание для статьи, чтобы рассказать о чем будет в статье в кратце.
    Здесь абсолютно комфортно вы можете генерировать тексты-«рыбы» для решения задач в области макетирования.';

    $text4 = 'Мы будем постепенно расширять функциональность нашего сайта и ждем с нетерпением ваших отзывов.Присылайте нам ваши рыбные тексты! Мы будем рады!';
?>
    <main>
        <div class="container">
            <div class="container_article">
                <h2><?php echo $title; ?></h2>
                <p><?php echo $text; ?></p>
                <p><?php echo $text2; ?></p>
                <h2><?php echo $titleTwo; ?></h2>
                <p><?php echo $text3; ?></p>
                <p><?php echo $text4; ?></p>
            </div>
        </div>
    </main>

    <style>

        .container_article{
           
            border: 1px solid grey;
        }

    </style>
</body>
</html>
