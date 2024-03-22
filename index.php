<?php

// autoload 
require_once __DIR__ . '/vendor/autoload.php';

use Atresna\Atresnaframework\core\Application;

/** Application Start  */
$app = new Application();

$app->router->get('/', function () {
    return 'Hello Wolrd';
});

$app->run();
