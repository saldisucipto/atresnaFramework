<?php 

namespace Atresna\Atresnaframework\core;;
abstract class DBModel extends Model {
    // get tableName Function 
    abstract public function tableName() : string;

    abstract public function attributes() : array;

    // Save Function 
    public function save() : bool{
        // get table name 
        $tableName = $this->tableName();
        $attributes = $this->attributes();
        $params = array_map(fn($attr) => ":$attr", $attributes);
        $statment = self::prepare("INSERT INTO $tableName (".implode(',', $attributes).") VALUES(".implode(',', $params).")");

        foreach ($attributes as $attribute) {
          $statment->bindValue(":$attribute", $this->{$attribute});
        }
        $statment->execute();
        return true;
    }

    static function prepare($SQL){
        return Application::$app->database->pdo->prepare($SQL);  
    }

}