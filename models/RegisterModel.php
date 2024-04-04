<?php 
namespace Atresna\Atresnaframework\models;
use Atresna\Atresnaframework\core\Model; 

class RegisterModel extends Model {
    // make all properties for the data 
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $passwordConfirm;


    public function register(){
        return 'Creating New Data';
    }

    function rules(): array{
        return [
            'firstname' => [parent::RULE_REQUIRED],
            'lastname' => [parent::RULE_REQUIRED],
            'email' => [parent::RULE_REQUIRED, parent::RULE_EMAIL],
            'password' => [parent::RULE_REQUIRED, [parent::RULE_MIN, 'min' => 8],],
            'passwordConfirm' => [parent::RULE_REQUIRED, [parent::RULE_MATCH, 'match' => 'password']],
        ];
    }
}