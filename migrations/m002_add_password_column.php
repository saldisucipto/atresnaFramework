<?php
use Atresna\Atresnaframework\core\Application;


class M002_add_password_column
{

    public function up() : void
    {
        $db = Application::$app->database;
        $QUERY = "ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL;";
        $db->pdo->exec($QUERY);
    }

    public function down()
    {
        $db = Application::$app->database;
        $QUERY = "ALTER TABLE users DROP COLUMN password;";
        $db->pdo->exec($QUERY);
    }
}