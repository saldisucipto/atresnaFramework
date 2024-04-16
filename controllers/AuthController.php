<?php

namespace Atresna\Atresnaframework\controllers;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\Controllers;
use Atresna\Atresnaframework\core\utils\Debug;
use Atresna\Atresnaframework\models\User;

/**
 * Class AuthController
 * 
 */
class AuthController extends Controllers
{
    function login()
    {
        $this->setLayout("auth");
        return $this->render('login');
    }

    function register(Request $request)
    {
        $this->setLayout("main");
        $registerModel = new User();

        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Registrasi Berhasil');
                Application::$app->response->redirect('/');
                exit;
            }

            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render("register", [
            'model' => $registerModel
        ]);
    }
}
