<?php

namespace Atresna\Atresnaframework\models;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\Model;
use Atresna\Atresnaframework\core\utils\Debug;
use Atresna\Atresnaframework\models\User;

class LoginForm extends Model
{

    // PROPERTIES 
    public string $email = "";
    public string $password = "";
    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED],
        ];
    }

    public function login()
    {
        $user = new User();
        $data = $user->findOne(['email' => $this->email]);
        if (!$data) {
            $this->addError('email', 'User does not exists');
            return false;
        }
        if (!password_verify($this->password, $data->password)) {
            $this->addError('password', 'Password is incorrect');
            return false;
        }
        return Application::$app->login($data);
    }


    function labels(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Password',
        ];
    }
}