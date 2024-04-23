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

    private string $csrf_token;


    function loadData($data)
    {
        // iterasi data 
        foreach ($data as $key => $value) {
            # check 
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
        $this->csrf_token = $data['csrf_token'];
    }

    // abstract function rules 
    abstract function rules(): array;

    function corsValidate()
    {
        try {
            if ($this->csrf_token === $_SESSION['csrf_token']) {
                return true;
            }
        } catch (\Throwable $e) {
            throw new \CorsException();
        }

    }


    // errors array 
    public array $errors = [];

    // Labels Array 
    public function labels(): array
    {
        return [];
    }

    // get lables 
    public function getLabels($attribute): string
    {
        return $this->labels()[$attribute] ?? $attribute;
    }

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
                    $this->addErrorForRule($attribute, self::RULE_REQUIRED);
                }
                if ($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    // used method add errors 
                    $this->addErrorForRule($attribute, self::RULE_EMAIL);
                }
                if ($ruleName === self::RULE_MIN && strlen($value) < $rule['min']) {
                    // used method add errors 
                    $this->addErrorForRule($attribute, self::RULE_MIN, $rule);
                }
                if ($ruleName === self::RULE_MAX && strlen($value) > $rule['max']) {
                    // used method add errors 
                    $this->addErrorForRule($attribute, self::RULE_MAX, $rule);
                }
                if ($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}) {
                    // used method add errors 
                    $rule['match'] = $this->getLabels($rule['match']);
                    $this->addErrorForRule($attribute, self::RULE_MATCH, $rule);
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
                        $this->addErrorForRule($attribute, self::RULE_UNIQUE, ['field' => $this->getLabels($attribute)]);
                    }
                }
            }
        }
        if (empty($this->errors) && $this->corsValidate()) {
            // Hapus token CSRF setelah formulir sebelumnya berhasil diproses
            unset($_SESSION['csrf_token']);
            return true;
        } else {
            return false;
        }

    }

    private function addErrorForRule(string $attribute, string $rule, $params = []): void
    {
        $message = $this->errorMessages()[$rule] ?? "";
        foreach ($params as $key => $value) {
            $message = str_replace("$key", $value, $message);
        }
        $this->errors[$attribute][] = $message;
    }

    public function addError(string $attribute, string $message): void
    {
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