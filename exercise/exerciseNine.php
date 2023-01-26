<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="20 tasks/css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="20 tasks/css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="20 tasks/css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="20 tasks/css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="20 tasks/css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="20 tasks/css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="20 tasks/css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="20 tasks/css/fa-regular.css">
    </head>

    <?php

        $array = [
            [
                'name' => 'Главная/',
                'class' => false,
            ],
            [
                'name' => 'PHP/',
                'class' => false,
            ],
            [
                'name' => 'Функции',
                'class' => true,
            ],
        ];
    
    ?>


        
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <?php foreach($array as $link => $value){
                        if($value['class']){
                            $is_active = 'active';
                        }else{
                            $is_active = 'active';
                        };   
                    ?>
                    <div class="panel-container show">
                        <div class="panel-content">
                             <ol class="breadcrumb page-breadcrumb">
                                 <li class="breadcrumb-item <?php echo $is_active; ?> "><a href="#"><?php echo $value['name'] ?></a></li>
                             </ol>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>

        <script src="20 tasks/js/vendors.bundle.js"></script>
        <script src="20 tasks/js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>