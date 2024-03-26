<?php

// autoload 
require_once __DIR__ . '/../vendor/autoload.php';

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\controllers\SiteController;

/** Application Start  */
$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'Handlecontact']);


$app->run();
