<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-secondary">thinkingOOP</a></li>
                <!--				<li><a href="#" class="nav-link px-2 text-white">About</a></li>-->
            </ul>

            <!--			<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">-->
            <!--				<input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">-->
            <!--			</form>-->
            <!---->
            <!--			<div class="text-end">-->
            <!--				<button type="button" class="btn btn-outline-light me-2">Login</button>-->
            <!--				<button type="button" class="btn btn-warning">Sign-up</button>-->
            <!--			</div>-->
        </div>
    </div>
</header>

<?php

$pdo = new PDO ('mysql:host=localhost;dbname=app3','root','');
$sql = 'SELECT * FROM posts';
$statement = $pdo->prepare($sql);
$statement->execute();
$posts = $statement->fetchAll(PDO::FETCH_ASSOC);


//echo '<pre>';
//var_dump($posts);
//echo '</pre>';
?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12">
            <a class="btn btn-success" href="create.php">Добавить</a>
            <div class="row">
                <table class="table mt-3">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>



                    <?php foreach ($posts as $index => $post) { ?>
                        <tr>
                            <td>
                                <a href="show.php?id=<?php echo $post['id'] ?>">
                                    <?php echo $post["title"]; ?>
                                </a>
                            </td>

                            <th scope="row"><?php echo $post["id"]; ?></th>
                            <td>
                                <a href="edit.php?id=<?php echo $post["id"]; ?>" class="btn btn-warning">Изменить</a>
                                <a href="delete.php?id=<?php echo $post["id"]; ?>" class="btn btn-danger" onclick="return confirm('Вы уверенны')">Удалить</a>
                            </td>
                        </tr>
                    <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
