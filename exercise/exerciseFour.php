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
    <body class="mod-bg-1 mod-nav-link ">

    <?php
        $slider = [
             '20 tasks/img/demo/gallery/thumb/21.jpg',
             '20 tasks/img/demo/gallery/thumb/22.jpg',
             '20 tasks/img/demo/gallery/thumb/23.jpg',
             '20 tasks/img/demo/gallery/thumb/24.jpg',
             '20 tasks/img/demo/gallery/thumb/25.jpg',
             '20 tasks/img/demo/gallery/thumb/26.jpg',
        ];
    ?>
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <!-- <div class="panel-tag">
                                <p>Сформируйте массив данных и выведите полностью альбом.</p>
                            </div> -->
                            <div id="js-lightgallery">
                                <?php  foreach ($slider as $key => $img) { ?>
                                <a class="" href="<?php echo $img; ?>">
                                    <img class="img-responsive" src="<?php echo $img; ?>" alt="image">
                                </a>
                                <?php } ?>
                                <!-- <a class="" href="20 tasks/img/demo/gallery/22.jpg">
                                    <img class="img-responsive" src="20 tasks/img/demo/gallery/thumb/22.jpg" alt="image">
                                </a>
                                <a class="" href="20 tasks/img/demo/gallery/23.jpg">
                                    <img class="img-responsive" src="20 tasks/img/demo/gallery/thumb/23.jpg" alt="image">
                                </a>
                                <a class="" href="20 tasks/img/demo/gallery/24.jpg">
                                    <img class="img-responsive" src="20 tasks/img/demo/gallery/thumb/24.jpg" alt="image">
                                </a>
                                <a class="" href="20 tasks/img/demo/gallery/25.jpg">
                                    <img class="img-responsive" src="20 tasks/img/demo/gallery/thumb/25.jpg" alt="image">
                                </a>
                                <a class="" href="20 tasks/img/demo/gallery/26.jpg">
                                    <img class="img-responsive" src="20 tasks/img/demo/gallery/thumb/26.jpg" alt="image">
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="20 tasks/js/vendors.bundle.js"></script>
        <script src="20 tasks/js/app.bundle.js"></script>
        <script src="20 tasks/js/miscellaneous/lightgallery/lightgallery.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
            //accordion filter
            initApp.listFilter($('#js_list_accordion'), $('#js_list_accordion_filter'));
            // nested list filter
            initApp.listFilter($('#js_nested_list'), $('#js_nested_list_filter'));
            //init navigation 
            initApp.buildNavigation($('#js_nested_list'));

            $(document).ready(function()
            {


                var $initScope = $('#js-lightgallery');
                if ($initScope.length)
                {
                    $initScope.justifiedGallery(
                    {
                        border: -1,
                        rowHeight: 150,
                        margins: 8,
                        waitThumbnailsLoad: true,
                        randomize: false,
                    }).on('jg.complete', function()
                    {
                        $initScope.lightGallery(
                        {
                            thumbnail: true,
                            animateThumb: true,
                            showThumbByDefault: true,
                        });
                    });
                };
                $initScope.on('onAfterOpen.lg', function(event)
                {
                    $('body').addClass("overflow-hidden");
                });
                $initScope.on('onCloseAfter.lg', function(event)
                {
                    $('body').removeClass("overflow-hidden");
                });
            });

        </script>
    </body>
</html>