<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="kirilM/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="kirilM/slick/slick-theme.css"/>
    <title>Document</title>
</head>
<body>
<p>
    <?php echo "Привет мир!"; ?>
</p>


<p>
    <?php $name = "Коля";
    echo "Привет " . $name;
    ?>
</p>


<?php
$name = "Иван ";
$suname = "Иванов ";
$age = 18;
$number = 89054789190;
$group = "ИСП9-201 ";
?>


<h1>
    <?php
    echo $name, $suname, $age . " ", $number . " ", $group;
    ?>
</h1>

<p>
    <?php
    for ($i = 0; $i <= 10; $i++) {
        echo $i;
    } ?>
</p>


<p>
    <?php $array = array(
        "Кирилл",
        "18",
        "БизнесТранс",
        "ИСП9-201",
    );
    for ($i = 0; $i < count($array); $i++) {
        echo $array[$i] . "<br>";
    }
    ?>
</p>

<p>
    <?php
    $n = 0;
    while ($n <= 5) {
        echo $n;
        $n++;
    }
    ?>
</p>

<p>
    <?php
    $i = 5;
    do {
        echo $i;
        $i--;
    } while ($i >= 0)
    ?>
</p>

<p>
    <?php
    $array = [
        1 => " Кирилл",
        2 => " Долбня",
        3 => " Валерьевич",
    ];
    foreach ($array as $key => $val) {
        echo $key . $val . '<br>';
    }
    ?>
</p>

<p>
    <?php
        for($i=0;$i<5;$i++){
            if($i==3){
                break;
            }
            echo $i.' цикл с break'.'<br>';
    }
    ?>
</p>

<p>
    <?php
    for ($n = 0; $n <= 5; $n++) {
        for ($k = 0; $k <= 5; $k++) {
            if ($n == 2 && $k == 2) {
                // Остановить оба цикла
                break 2;
            }
            echo $k.' цикл с break 2'.'<br>';
        }
    }
    ?>
</p>

<p>
    <?php
        for($i=0;$i<=5;$i++){
            if($i==3){
                continue;
            }
            echo $i.' цикл с continue'.'<br>';
        }
    ?>
</p>

<p>
    <?php
        for($i=0;$i<1;$i++){
            for($k=0;$k<5;$k++){
                continue 2;
                echo $k.' переменная k '.'<br>';
            }
        }
    ?>
</p>
<p>
    <?php
        $name='кирилл';
        var_dump($name);
    ?>
</p>

<p>
    <?php
        $foo = 10;
        var_dump($foo);
        $foo ='Привет';
        var_dump($foo);
        $foo = true;
        var_dump($foo);
        $array=[];
        var_dump($array);
        var_dump($array);
        $number=4.5;
        var_dump($number);
    ?>
</p>

<p>
    <?php
        $array=[
            ['Кирилл ','18 ','ИСП9-201 '],    
            ['Тагир ','19 ','ИСП9-201 '],
            ['Мурат ','20 ','ИСП9-201 '],
            ['Дмитрий ','22 ','ИСП9-201 '],
        ];

        for ($i=0; $i < count($array); $i++){
            for ($k=0; $k <count($array); $k++) { 
                echo $array[$i][$k];
            }
           
        }
    ?>
</p>

<table>

        <tr>
            <th>№</th>
            <th>name</th>
            <th>age</th>
            <th>suname</th>
        </tr>

    <?php
        $group = [
             [
                'name'=>'Кирилл',
                'age'=>'18',
                'suname'=>'Долбня',
                'link' => 'https://github.com/?ysclid=lct3wuwfx4373803508',
             ],

             [
                'name'=>'Тагир',
                'age'=>'20',
                'suname'=>'Долбня',
                'link' => 'https://github.com/?ysclid=lct3wuwfx4373803508',
             ],

             [
                'name'=>'Мурат',
                'age'=>'17',
                'suname'=>'Гергов',
                'link' => 'https://github.com/?ysclid=lct3wuwfx4373803508',
             ],

             [
                'name'=>'Дмитрий',
                'age'=>'25',
                'suname'=>'Рязанов',
                'link' => 'https://github.com/?ysclid=lct3wuwfx4373803508',
             ],
        ];

        foreach($group as $number => $student){ ?>
<!-- <tr> -->
    <!-- <td class='number'><i><?php echo $number ?></i></td> -->
    <!-- <td class='name'><a href="<?php echo $student["link"]; ?>"><?php echo $student['name'] ?></a></td> -->
    <!-- <td class='age'><?php echo $student['age'] ?></td> -->
    <!-- <td><?php echo $student['suname'] ?></td> -->
<!-- </tr> -->
        <?php }
    ?>
</table>

<!-- <style>
    table{
        border: 1px solid black;
    }

    th,td{
        border: 1px solid black;
    }


    .name{
        font-weight: bold;
    }

    .age{
        color: blue;
    }
</style> -->



<p>
    <?php
        $a = 1;
        $b = 11 ;
        $c = 1;
        $d = ($b * $b) - (4 * $a * $c);
        echo 'Дискриминант равен: '.$d.'<br>';


        if ($d < 0){
            echo 'Нет корней';
        }elseif($d == 0){
            $x1 = -$b / 2 * $a;
            echo 'x1 равняется: '.$x1.'<br>';
        }else{
            $x1 = (-$b - sqrt($d) / (2 * $a));
            $x2 = (-$b + sqrt($d) / (2 * $a));
            echo 'x1 раняется: '.$x1.'<br>'.'x2 равняется: '.$x2;
        }
    ?>
</p>

<table>
        <tr>
            <th>№</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Возраст</th>
            <th>Номер Телефона</th>
            <th>Статус</th>
        </tr>
    <?php
        $array = [
            [
                'Фамилия' => 'Долбня',
                'Имя' => 'Кирилл',
                'Отчество' => 'Валерьевич',
                'Возраст' => '18',
                'Телефон' => '8-999-999-00-00',
                'is_active' => true,
            ],

            [
                'Фамилия' => 'Гергов',
                'Имя' => 'Мурат',
                'Отчество' => 'Анзорович',
                'Возраст' => '17',
                'Телефон' => '8-909-414-19-07',
                'is_active' => false,
            ],

            [
                'Фамилия' => 'Мисирян',
                'Имя' => 'Артур',
                'Отчество' => 'Иванович',
                'Возраст' => '19',
                'Телефон' => '8-666-777-11-11',
                'is_active' => true,
            ],

            [
                'Фамилия' => 'Ивнов',
                'Имя' => 'Иван',
                'Отчество' => 'Иванович',
                'Возраст' => '22',
                'Телефон' => '8-908-871-28-17',
                'is_active' => false,
            ],

            [
                'Фамилия' => 'Смирнов',
                'Имя' => 'Андрей',
                'Отчество' => 'Андреевич',
                'Возраст' => '20',
                'Телефон' => '8-032-823-90-82',
                'is_active' => false,
            ],

            [
                'Фамилия' => 'Фаргиев',
                'Имя' => 'Герман',
                'Отчество' => 'Альбертович',
                'Возраст' => '16',
                'Телефон' => '8-903-888-43-53',
                'is_active' => true,
            ],
        ];

        

        foreach($array as $number => $student){
        
            if($student['is_active']) {  
                $stydent_text = "Молодец";
                $stydent_class = "stydOk";

            }else{ 
                $stydent_text = 'не молодец';
                $stydent_class = 'styNoOk';

           }?>
            <tr>
                <td class="<?php echo $stydent_class;?>"><?php echo $number; ?></td>
                <td class="<?php echo $stydent_class;?>"><?php echo $student['Фамилия']?></td>
                <td class="<?php echo $stydent_class;?>"><a href='#'><?php echo $student['Имя']; ?></a></td>
                <td class="<?php echo $stydent_class;?>"><?php echo $student['Отчество'];?></td>
                <td class="<?php echo $stydent_class;?>"><?php echo $student['Возраст'];?></td>
                <td class="<?php echo $stydent_class;?>"><?php echo $student['Телефон'];?></td>
                <td class="<?php echo $stydent_class;?>"><?php echo $stydent_text;?></td>
            </tr>
            <?php } ?>

          


</tabel>

<div class="slider">

    <?php
        $arr=[
            'oneImg' => 'https://klike.net/uploads/posts/2019-06/1560838551_1.jpg',
            'twoImg' => 'https://klike.net/uploads/posts/2019-06/medium/1560838591_2.jpg',
            'threeImg' => 'https://klike.net/uploads/posts/2019-06/medium/1560838613_5.jpg',
        ];

        foreach($arr as $key => $imgCar){?>       

    <div class="slider_item">
        <img src="<?php echo $imgCar; ?>" alt="">
    </div>


    <?php } ?>
</div>

<script type="text/javascript" src="kirilM/jquery-3.6.1.min.js"></script>
<script type="text/javascript" src="kirilM/slick/slick.min.js"></script>
<script>
    $(document).ready(function(){
    $('.slider').slick({

    });
});
</script>

<style>
    .stydOk{
        color: green;
        border-right: 1px solid black;
    }

    .styNoOk{
        color: red;
        border-right: 1px solid black;
    }

    table{
        border: 1px solid black;
        text-align: center;
    }

    th{
        border-bottom: 1px solid black;
    }

    th:not(:last-child){
        border-right: 1px solid black;
    }
    
    td{
        border-bottom: 1px solid black;
    }

    .slider_item{
        font-size: 100px;
        height: 600px;

    }



</style>
</body>
</html>




