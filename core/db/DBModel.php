<?php

namespace Atresna\Atresnaframework\core\db;

use Atresna\Atresnaframework\core\Model;
use Atresna\Atresnaframework\core\Application;

abstract class DBModel extends Model
{
    // get tableName Function 
    abstract public function tableName(): string;

    abstract public function attributes(): array;

    abstract public function primaryKey(): string;

    // Save Function 
    public function save(): bool
    {
        // get table name 
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn ($attr) => ":$attr", $attributes);
        $statment = self::prepare("INSERT INTO $tableName (" . implode(',', $attributes) . ") VALUES(" . implode(',', $params) . ")");

        foreach ($attributes as $attribute) {
            $statment->bindValue(":$attribute", $this->{$attribute});
        }
        $statment->execute();
        return true;
    }

    static function prepare($SQL)
    {
        return Application::$app->database->pdo->prepare($SQL);
    }

    public function findOne($where)
    { // [email => saldisucipto@tes.com , firstname => saldi]
        $tableName = static::tableName(); // akses value pada abstract static function 
        $attributes = array_keys($where);
        $SQL = implode("AND ", array_map(fn ($attr) => "$attr = :$attr", $attributes));
        $statement = self::prepare("SELECT * FROM $tableName WHERE $SQL");
        foreach ($where as $key => $item) {
            $statement->bindValue(":$key", $item);
        }
        $statement->execute();
        return $statement->fetchObject(static::class);
    }
}
