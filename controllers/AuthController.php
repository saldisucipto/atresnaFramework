<?php
namespace Atresna\Atresnaframework\controllers;

use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\Controllers;
use Atresna\Atresnaframework\core\utils\Debug;
use Atresna\Atresnaframework\models\RegisterModel;

/**
 * Class AuthController
 * 
 */
class AuthController extends Controllers{
    function login(){
        $this->setLayout("auth");
        return $this->render('login');
    }

    function register(Request $request)
    {
        $this->setLayout("main");
        $registerModel = new RegisterModel();
        
        if($request->isPost()){
            $registerModel->loadData($request->getBody());


            if($registerModel->validate() && $registerModel->register()){
                return 'Success';
            }

           Debug::debugInfo($registerModel->errors);

            return $this->render('register');
        }

        return $this->render("register", [
            'model' => $registerModel
        ]);
    }
}