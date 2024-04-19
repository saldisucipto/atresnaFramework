<?php

namespace Atresna\Atresnaframework\controllers;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\Controllers;
use Atresna\Atresnaframework\core\Response;
use Atresna\Atresnaframework\models\User;
use Atresna\Atresnaframework\models\LoginForm;
use Atresna\Atresnaframework\core\middleware\AuthMiddleWare;


/**
 * Class AuthController
 * 
 */
class AuthController extends Controllers
{

    // constructor function 
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    function login(Request $request, Response $response)
    {
        $loginForm = new LoginForm();
        if ($request->isPost()) {
            // LOAD DATA 
            $loginForm->loadData($request->getBody());
            // Debug::debugInfo($request->getBody());

            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect("/");
                return;
            }
        }
        $this->setLayout("auth");
        return $this->render('login', [
            'model' => $loginForm,
        ]);
    }

    // logout function 
    function logout(Request $request, Response $response): void
    {
        Application::$app->logout();
        $response->redirect('/');
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

    function profile()
    {
        return $this->render('profile');
    }
}
