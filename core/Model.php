<?php

namespace Atresna\Atresnaframework\core;

abstract class Model {
    // rules properties 
    public const RULE_REQUIRED = "required";
    public const RULE_EMAIL = "email";
    public const RULE_MIN = "min";
    public const RULE_MAX = "max";
    public const RULE_MATCH = "match";


    function loadData($data){
        // iterasi data 
        foreach ($data as $key => $value) {
            # check 
            if(property_exists($this, $key)){
                $this->{$key} = $value;

            }
        }

    }

    // abstract function rules 
    abstract function rules() : array;


    // errors array 
    public array $errors= [];


    function validate():bool{
        foreach ($this->rules() as $attribute => $rules) {
            $value = $this->{$attribute};
            foreach ($rules as $rule) {
                # code...
                $ruleName = $rule;
                if(!is_string($ruleName)){
                    $ruleName = $rule[0];
                }
                if($ruleName === self::RULE_REQUIRED && !$value){
                    // used method add errors 
                    $this->addError($attribute, self::RULE_REQUIRED);
                }
                if($ruleName === self::RULE_EMAIL && !filter_var($value, FILTER_VALIDATE_EMAIL)){
                    // used method add errors 
                    $this->addError($attribute, self::RULE_EMAIL);
                }
                if($ruleName === self::RULE_MIN && strlen($value) < $rule['min']){
                    // used method add errors 
                    $this->addError($attribute, self::RULE_MIN, $rule);
                }
                if($ruleName === self::RULE_MAX && strlen($value) > $rule['max']){
                    // used method add errors 
                    $this->addError($attribute, self::RULE_MAX, $rule);
                }
                if($ruleName === self::RULE_MATCH && $value !== $this->{$rule['match']}){
                    // used method add errors 
                    $this->addError($attribute, self::RULE_MATCH, $rule);
                }
            }
        }
        return empty($this->errors); // jika tidak ada value error berarti validate lolos
    }

    function addError(string $attribute, string $rule, $params=[]):void {
        $message = $this->errorMessages()[$rule] ?? "";
        foreach ($params as $key => $value) {
            $message = str_replace("$key", $value, $message);
        }
        $this->errors[$attribute][] = $message;
    }

    function errorMessages(): array {
        return [
            self::RULE_REQUIRED => "Kolom ini harus di isi!",
            self::RULE_EMAIL => "Kolom ini harus diisi dengan email yang valid!",
            self::RULE_MATCH => "Kolom ini harus sama dengan kolom = match",
            self::RULE_MAX => "Maksimal value yang ada di kolom ini ialah = max",
            self::RULE_MIN => "Minimal value yang ada di kolom ini ialah = min",
        ];
    }
}