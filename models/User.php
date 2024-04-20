<?php

namespace Atresna\Atresnaframework\models;

use Atresna\Atresnaframework\core\DBModel;
use Atresna\Atresnaframework\core\UserModel;


class User extends UserModel
{
    // const for status users
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_DELETED = 2;
    // make all properties for the data 
    public string $firstanme = '';
    public string $lastname = '';
    public string $email = '';
    public string $password = '';
    public int $status = self::STATUS_INACTIVE;
    public string $passwordConfirm = '';

    // Implementasi Dari Class Abtsract DBModel
    public function tableName(): string
    {
        return 'users';
    }

    public function primaryKey(): string
    {
        return 'id';
    }

    // Implementasi Dari Class Abstract  
    public function attributes(): array
    {
        return ['firstanme', 'lastname', 'email', 'status', 'password'];
    }

    public function getDisplayName(): string
    {
        return $this->firstanme . ' ' . $this->lastname;
    }

    // ovveride save method on parent
    public function save(): bool
    {
        $this->status = self::STATUS_INACTIVE;
        $this->password = password_hash($this->password, PASSWORD_DEFAULT);
        return parent::save();
    }

    function rules(): array
    {
        return [
            'firstanme' => [self::RULE_REQUIRED],
            'lastname' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL, [self::RULE_UNIQUE, 'class' => self::class]],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8],],
            'passwordConfirm' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }

    function labels(): array
    {
        return [
            'firstanme' => 'Your First Name',
            'lastname' => "Last Name",
            'email' => "Email",
            'password' => 'Password',
            'passwordConfirm' => 'Password Confirmation'
        ];
    }
}