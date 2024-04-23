<?php

namespace Atresna\Atresnaframework\models;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\Model;
use Atresna\Atresnaframework\core\utils\Debug;
use Atresna\Atresnaframework\models\User;

class ContactForm extends Model
{

    // PROPERTIES 
    public string $subject = "";
    public string $email = "";
    public string $body = "";
    public function rules(): array
    {
        return [
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'subject' => [self::RULE_REQUIRED],
            'body' => [self::RULE_REQUIRED],
        ];
    }


    function labels(): array
    {
        return [
            'subject' => 'Subject',
            'email' => 'Email',
            'body' => 'Body',
        ];
    }


    function send()
    {
        return true;
    }
}