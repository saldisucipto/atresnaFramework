<?php

// autoload 
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use Atresna\Atresnaframework\core\Application;

$config = [
    'database' => [
        'dsn' => $_ENV['DB_DSN'],
        'username' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
];

/** Application Start  */
$app = new Application(__DIR__, $config);

$app->database->applyMigrations();