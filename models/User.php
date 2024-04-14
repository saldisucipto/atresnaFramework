<?php
namespace Atresna\Atresnaframework\models;

use Atresna\Atresnaframework\core\DBModel;


class User extends DBModel
{
    // make all properties for the data 
    public string $firstanme = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public string $passwordConfirm = '';

    // Implementasi Dari Class Abtsract DBModel
    public function tableName(): string {
        return 'users';
    }

    // Implementasi Dari Class Abstract  
    public function attributes(): array {
        return ['firstanme', 'lastname', 'email', 'password'];
    }

    public function register()
    {
        return $this->save();
    }

    function rules(): array
    {
        return [
            'firstanme' => [parent::RULE_REQUIRED],
            'lastname' => [parent::RULE_REQUIRED],
            'email' => [parent::RULE_REQUIRED, parent::RULE_EMAIL],
            'password' => [parent::RULE_REQUIRED, [parent::RULE_MIN, 'min' => 8],],
            'passwordConfirm' => [parent::RULE_REQUIRED, [parent::RULE_MATCH, 'match' => 'password']],
        ];
    }




}