<?php

// autoload 
require_once __DIR__ . '/../vendor/autoload.php';

use Atresna\Atresnaframework\core\Application;

/** Application Start  */
$app = new Application(dirname(__DIR__));

$app->router->get('/', function () {
    return 'Hello Wolrd';
});
$app->router->get('/contact', 'contact');

$app->run();
