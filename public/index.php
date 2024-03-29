<?php

// autoload 
require_once __DIR__ . '/../vendor/autoload.php';

use Atresna\Atresnaframework\controllers\AuthController;
use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\controllers\SiteController;

/** Application Start  */
$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'Handlecontact']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->post('/register', [AuthController::class, 'register']);




$app->run();