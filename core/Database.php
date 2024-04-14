<?php

namespace Atresna\Atresnaframework\core;


class Database
{
    public \PDO $pdo;
    function __construct(array $config)
    {
        $dsn = $config['dsn'] ?? '';
        $username = $config['username'] ?? '';
        $password = $config['password'] ?? '';

        $this->pdo = new \PDO($dsn, $username, $password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    }

    function applyMigrations()
    {
        $this->createMigrationTable();
        $appliedMigrations = $this->getAplliedMigrations();

        $files = scandir(Application::$ROOT_DIR . '/migrations');

        $toApplyMigrations = array_diff($files, $appliedMigrations);
        foreach ($toApplyMigrations as $migration) {
            if ($migration === '.' || $migration === '..') {
                continue; // skip jika value '.' atau '..'
            }
            // checking file on migration and then execute them 
            require_once Application::$ROOT_DIR . '/migrations/' . $migration;
            $classFileName = pathinfo($migration, PATHINFO_FILENAME);
            // make instance for class name 
            $insatance =  (object) new $classFileName();
            $this->log("Applying Migration $migration");
            $insatance->up(); // execute up method on class Migration
            $this->log("Applied Migration $migration");
            $newMigration[] = $migration;
        }
        if (!empty($newMigration)) {
            $this->saveMigrations($newMigration);
        } else {
            $this->log("All Migrations All Applied");
        }
    }

    function createMigrationTable()
    {
        $this->pdo->exec("CREATE TABLE IF NOT EXISTS migrations (
            id INT AUTO_INCREMENT PRIMARY KEY,
            migration VARCHAR(255), 
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=INNODB;");
    }

    function getAplliedMigrations()
    {
        $statement = $this->pdo->prepare("SELECT migration from migrations");
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_COLUMN);
    }

    function saveMigrations(array $migrations)
    {
        $str = implode(",", array_map(fn($m) => "('$m')", $migrations));
        $statement = $this->pdo->prepare("INSERT INTO migrations (migration) VALUES  $str");
        $statement->execute();
    }

    protected function log($message)
    {
        echo '[' . date('Y-m-d H:i:s') . '] - ' . $message . PHP_EOL;
    }
}