<?php

namespace Atresna\Atresnaframework\core;

abstract class Model
{
    // rules properties 
    const RULE_REQUIRED = "required";
    const RULE_EMAIL = "email";
    const RULE_MIN = "min";
    const RULE_MAX = "max";
    const RULE_MATCH = "match";
    const RULE_UNIQUE = "unique";


    function loadData($data)
    {
        // iterasi data 
        foreach ($data as $key => $value) {
            # check 
            if (property_exists($this, $key)) {
                $this->{$key} = $value;

            }
        }

    }

    // abstract function rules 
    abstract function rules(): array;


    // errors array 
    public array $errors = [];


    function validate(): bool
    {
        foreach ($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                # code...
                $ruleName = $rule;
                if (!is_string($ruleName)) {
                    $ruleName = $rule[0];
                }
                if ($ruleName === self::RULE_REQUIRED && !$value) {
                    // used method add errors 
                    $this->addError($attribute, self::RULE_REQUIRED);
                }
                if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    // used method add errors 
                    $this->addError($attribute, self::RULE_EMAIL);
                }
                if ($ruleName === self::RULE_MIN && strlen($value) < $rule['min']) {
                    // used method add errors 
                    $this->addError($attribute, self::RULE_MIN, $rule);
                }
                if ($ruleName === self::RULE_MAX && strlen($value) > $rule['max']) {
                    // used method add errors 
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }
                if ($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}) {
                    // used method add errors 
                    $this->addError($attribute, self::RULE_MATCH, $rule);
                }
                if ($ruleName === self::RULE_UNIQUE) {

                    // GET CLASS NAME 
                    $className = $rule['class']; // from parameter on instance model
                    $uniqueAttribute = $rule['attribute'] ?? $attribute; // jika taidak ada paraemter dari model akan menggunkan parameter default 
                    $tableName = $className::tableName(); // Get table name from class instance 
                    $statement = Application::$app->database->prepare("SELECT * FROM $tableName WHERE $uniqueAttribute  = :attr "); // Make Query 
                    $statement->bindValue(":attr", $value);
                    $statement->execute();
                    $record = $statement->fetchObject();
                    if ($record) {
                        $this->addError($attribute, self::RULE_UNIQUE, ['field' => $attribute]);
                    }
                }
            }
        }
        return empty($this->errors); // jika tidak ada value error berarti validate lolos
    }

    function addError(string $attribute, string $rule, $params = []): void
    {
        $message = $this->errorMessages()[$rule] ?? "";
        foreach ($params as $key => $value) {
            $message = str_replace("$key", $value, $message);
        }
        $this->errors[$attribute][] = $message;
    }

    function errorMessages(): array
    {
        return [
            self::RULE_REQUIRED => "Kolom ini harus di isi!",
            self::RULE_EMAIL => "Kolom ini harus diisi dengan email yang valid!",
            self::RULE_MATCH => "Kolom ini harus sama dengan kolom = match",
            self::RULE_MAX => "Maksimal value yang ada di kolom ini ialah = max",
            self::RULE_MIN => "Minimal value yang ada di kolom ini ialah = min",
            self::RULE_UNIQUE => "field ini sudah ada yang menggunakan!, coba dengan field lain",
        ];
    }

    // FUNCTION HAS ERRORS (THROWS BOOL)
    function hasError($atrribute)
    {
        return $this->errors[$atrribute] ?? false;
    }

    // FUNCTION GET FIRST ERRORS 
    function getFirstError($atrribute): string
    {
        return $this->errors[$atrribute][0] ?? false;
    }
}