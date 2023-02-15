<?php

$config = include ('config.php');

include ('queryBuildre.php');

include ('connection.php');


return new QueryBuildre(Connection::make($config['database']));