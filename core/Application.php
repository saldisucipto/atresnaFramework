<?php

namespace Atresna\Atresnaframework\core;

use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\Database;
use Atresna\Atresnaframework\core\Session;


class Application
{
    public string $userClass;

    public Router $router;
    public Request $request;
    public static string $ROOT_DIR;
    public Response $response;
    public Session $session;
    public static Application $app;
    public Controllers $controllers;
    public Database $database;
    public ?DBModel $user;

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
        echo $this->router->resolve();
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