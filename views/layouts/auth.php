<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atresna Auth Layout</title>
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <!-- Ini Adalah Layout Template -->
    <div class="main-container">
        <div class="container">
            <div class="navbar">
                <div>
                    <h1>Atresna Framework</h1>
                </div>
                <div class="navbar-item">
                    <div>
                        <a href="/login">Login</a>
                    </div>
                    <div>
                        <a href="/register">Register</a>
                    </div>
                </div>

            </div>
            {{content}}
        </div>
    </div>

</body>

</html>