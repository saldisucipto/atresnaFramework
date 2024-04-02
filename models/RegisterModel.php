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
            
        ];
        
    }


    

}