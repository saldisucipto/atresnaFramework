<?php
use Atresna\Atresnaframework\core\Application;

class M001_initial
{
    function up()
    {
        // initial DB 
        $db = Application::$app->database;
        $QUERY = "CREATE TABLE users (
            id INT AUTO_INCREMENT PRIMARY KEY, 
            email VARCHAR(255) NOT NULL, 
            firstanme VARCHAR(255) NOT NULL, 
            lastname VARCHAR(255) NOT NULL, 
            status TINYINT NOT NULL DEFAULT 0, 
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )ENGINE=INNODB;";
        $db->pdo->exec($QUERY);
    }

    function down()
    {
        // initial DB 
        $db = Application::$app->database;
        $QUERY = "DROP TABLE users;";
        $db->pdo->exec($QUERY);
    }
}