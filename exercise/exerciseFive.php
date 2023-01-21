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
            $users = [
                [
                    'name' => 'Sunny A.',
                    'image' => '20 tasks/img/demo/authors/sunny.png',
                    'twitter' => 'https://twitter.com/@myplaneticket',
                    'wrapbootstrap' => 'https://wrapbootstrap.com/user/myorange',
                    'position' => '(UI/UX Expert)',
                    'status' => 'Lead Author',
                    'title' => 'Contact Sunny',
                    'twittertext' => '@myplaneticket',
                    'altimage' => 'Sunny A.',
                ],

                [
                    'name' => 'Jos K.',
                    'image' => '20 tasks/img/demo/authors/josh.png',
                    'twitter' => 'https://twitter.com/@atlantez',
                    'wrapbootstrap' => 'https://wrapbootstrap.com/user/Walapa',
                    'position' => '(ASP.NET Developer)',
                    'status' => 'Partner &amp; Contributor',
                    'title' => 'Contact Jos',
                    'twittertext' => '@atlantez',
                    'altimage' => 'Jos K.',
                ],

                [
                    'name' => 'Jovanni L.',
                    'image' => '20 tasks/img/demo/authors/jovanni.png',
                    'twitter' => 'https://twitter.com/@lodev09',
                    'wrapbootstrap' => 'https://wrapbootstrap.com/user/lodev09',
                    'position' => '(PHP Developer)',
                    'status' => 'Partner &amp; Contributor',
                    'title' => 'Contact Jovanni',
                    'twittertext' => '@lodev09',
                    'altimage' => 'Jovanni L.',
                ],

                [
                    'name' => 'Roberto R.',
                    'image' => '20 tasks/img/demo/authors/roberto.png',
                    'twitter' => 'https://twitter.com/@sildur',
                    'wrapbootstrap' => 'https://wrapbootstrap.com/user/sildur',
                    'position' => '(Rails Developer)',
                    'status' => 'Partner &amp; Contributor',
                    'title' => 'Contact Roberto',
                    'twittertext' => '@sildur',
                    'altimage' => 'Roberto R.',
                ],
            ]
        ?>

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
                    <div class="panel-container show">
                        <div class="panel-content">
                           <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">
                           <?php foreach ($users as $key => $value) { ?>

                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="<?php echo $value['image'] ?>" alt="<?php echo $value['altimage'] ?>" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                    <?php echo $value['name'].$value['position'] ?>
                                        <small class="m-0 fw-300">
                                        <?php echo $value['status'] ?>
                                        </small>
                                    </h5>


                                    <a href="<?php echo $value['twitter'] ?>" class="text-info fs-sm" target="_blank"><?php echo $value['twittertext'] ?></a> 

                                    -
                                    <a href="<?php echo $value['wrapbootstrap'] ?>" class="text-info fs-sm" target="_blank" title="<?php echo $value['title'] ?>"><i class="fal fa-envelope"></i></a>
                                </div>

                                
                            </div>
                            
                            <?php } ?>
                            <!-- <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="20 tasks/img/demo/authors/josh.png" alt="Jos K." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jos K. (ASP.NET Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@atlantez" class="text-info fs-sm" target="_blank">@atlantez</a> -
                                    <a href="https://wrapbootstrap.com/user/Walapa" class="text-info fs-sm" target="_blank" title="Contact Jos"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="20 tasks/img/demo/authors/jovanni.png" alt="Jovanni Lo" class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Jovanni L. (PHP Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@lodev09" class="text-info fs-sm" target="_blank">@lodev09</a> -
                                    <a href="https://wrapbootstrap.com/user/lodev09" class="text-info fs-sm" target="_blank" title="Contact Jovanni"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">
                                <img src="20 tasks/img/demo/authors/roberto.png" alt="Roberto R." class="img-thumbnail img-responsive rounded-circle" style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        Roberto R. (Rails Developer)
                                        <small class="m-0 fw-300">
                                            Partner &amp; Contributor
                                        </small>
                                    </h5>
                                    <a href="https://twitter.com/@sildur" class="text-info fs-sm" target="_blank">@sildur</a> -
                                    <a href="https://wrapbootstrap.com/user/sildur" class="text-info fs-sm" target="_blank" title="Contact Roberto"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div> -->
                        </div>
                        </div>
                    </div>
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