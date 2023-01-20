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
        $data = [
        'Репорты',
        'Аналитика',
        'Экспорт',
        'Хранилище',
        ];

        $svg_image = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>';

    ?>
    <div class="wrap">
        <div class="search">
            <div>
                <input class="input" type="text" placeholder="Фильтер">
            </div>
            <div class="svg_image">
                <?php echo $svg_image ?>
            </div>
        </div>

        <div class="list">
            <ul class="ul">
                <?php
                for ($i=0; $i < count($data); $i++) { ?>
                <li class="li"><?php echo $data[$i]; ?> </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <style>
     
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .wrap{
        margin: 20px;
    }

    .search{
        display: flex;
    }

    .input{
        height: 20px;
        width: 250px;
        background: #fce881;
        border: 1px solid black;
    }

    .svg_image{
        width: 25px;
        height: 20px;
        background: orange;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .ul{
        list-style: none;
    }

    .li{
        border: 1px solid black;
        width: 275px;
    }

    </style>
</body>
</html>