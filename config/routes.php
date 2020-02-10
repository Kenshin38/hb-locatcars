<?php

use Bramus\Router\Router;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/routes.php';
?>
<?php
$router = new Router;
$router->get('/hello', function () {
    echo "Hello world !";
});
$router->run();
?>