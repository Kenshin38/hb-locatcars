<?php

$router = $container->getRouter();

$router->get('/zboub', function () {
    echo "Stella Chapon";
});
$router->run();
?>