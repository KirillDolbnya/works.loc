<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Погружение ООП</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>

            <?php
            $posts = [
                [
                    "id"    => 1,
                    "title" => " Lorem ipsum dolor 1",
                ],
                [
                    "id"    => 2,
                    "title" => " Lorem ipsum dolor 2",
                ],
                [
                    "id"    => 3,
                    "title" => " Lorem ipsum dolor 3",
                ],
            ]
            ?>

            <div class="panel-container show">
                <div class="panel-content">
                    <h5 class="frame-heading">Список постов</h5>
                    <a class="btn btn-success" href="create_user.php">Добавить</a>
                    <div class="frame-wrap mt-3">
                        <table class="table m-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>title</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($posts as $index => $post) { ?>
                                <tr>
                                    <th scope="row"><?php echo $post["id"]; ?></th>
                                    <td><?php echo $post["title"]; ?></td>
                                    <td>
                                        <a href="edit.php?id=" class="btn btn-warning">Изменить</a>
                                        <a href="delete.php?id=" class="btn btn-danger">Удалить</a>
                                    </td>
                                </tr>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>