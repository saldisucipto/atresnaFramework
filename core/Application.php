<?php

namespace Atresna\Atresnaframework\core;

use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\Database;
use Atresna\Atresnaframework\core\Session;
use Atresna\Atresnaframework\core\View;


class Application
{
    public string $userClass;
    public string $layout = 'main';

    public Router $router;
    public Request $request;
    public static string $ROOT_DIR;
    public Response $response;
    public Session $session;
    public static Application $app;
    public ?Controllers $controllers = null;
    public Database $database;
    public ?DBModel $user;
    public View $view;

    public function __construct($rootPath, array $config)
    {

        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->database = new Database($config['database']);
        $this->session = new Session();
        $this->userClass = $config['userClass'];
        $this->view = new View();

        $primaryValue = $this->session->get('user');
        if ($primaryValue) {

            $instance = new $this->userClass();
            $primaryKey = $instance->primaryKey();
            $this->user = $instance->findOne([$primaryKey => $primaryValue]);
        } else {
            $this->user = null;
        }
    }

    public function run()
    {
        try {
            echo $this->router->resolve();
        } catch (\Throwable $e) {
            $this->response->setStatusCode($e->getCode());
            echo $this->view->renderView('_errors', [
                'exceptions' => $e,
            ]);
        }
    }

    // isGuest Function 
    public static function isGuest()
    {
        return !self::$app->user;
    }

    // setter
    public function getContoller(): Controllers
    {
        return $this->controllers;
    }

    public function setController(Controllers $controllers): void
    {
        $this->controllers = $controllers;
    }

    public function login(DBModel $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }

    function logout()
    {
        $this->user = null;
        $this->session->remove('user');
    }
}
