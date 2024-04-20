<?php

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\View;

// /**
//  * @var Atresna\Atresnaframework\core\View;
//  */



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $this->title  ?> </title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <!-- Ini Adalah Layout Template -->
    <div class="main-container">
        <div class="container">
            <div class="navbar">
                <div>
                    <a href="/">
                        <h1>Atresna Framework</h1>
                    </a>
                </div>
                <?php if (Application::isGuest()): ?>
                <div class="navbar-item">
                    <div>
                        <a href="/login">Login</a>
                    </div>
                    <div>
                        <a href="/register">Register</a>
                    </div>
                </div>
                <?php if (Application::isGuest()) : ?>
                <div class="navbar-item">
                    <div>
                        <a href="/contact">Contact</a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div>
                        <a href="/login">Login</a>
                    </div>
                    <div>
                        <a href="/register">Register</a>
                    </div>
                </div>

                <?php else: ?>
                <div class="navbar-item">
                    <div>
                        <span>
                            Hallo <?php echo Application::$app->user->getDisplayName() ?>
                        </span>
                    </div>
                    <div>
                        <a href="/logout">Logout</a>
                    </div>
                </div>

                <?php else : ?>
                <div class="navbar-item">
                    <div>
                        <a href="/profile">Profile</a>
                    </div>
                </div>
                <div class="navbar-item">
                    <div>
                        <span>
                            Hallo <?php echo Application::$app->user->getDisplayName() ?>
                        </span>
                    </div>
                    <div>
                        <a href="/logout">Logout</a>
                    </div>
                </div>

                <?php endif; ?>

            </div>
            {{content}}
        </div>
    </div>

</body>

</html>