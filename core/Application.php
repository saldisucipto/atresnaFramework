<?php

namespace Atresna\Atresnaframework\core;

use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\Database;


class Application
{
    public Router $router;
    public Request $request;
    public static string $ROOT_DIR;
    public Response $response;
    public static Application $app;
    public Controllers $controllers;
    public Database $database;

    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        $this->database = new Database($config['database']);
    }

    public function run()
    {
        echo $this->router->resolve();
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
}