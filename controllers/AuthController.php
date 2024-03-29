<?php
namespace Atresna\Atresnaframework\controllers;

use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\Controllers;
use Atresna\Atresnaframework\core\utils\Debug;

/**
 * Class AuthController
 * 
 */
class AuthController extends Controllers{
    function login(){
        return $this->render('login');
    }

    function register(Request $request)
    {
        // Debug::debugInfo($request->isPost());
        if($request->isPost()){
            return "Handling SUbmitted Data";
        }
        return $this->render("register");
    }
}