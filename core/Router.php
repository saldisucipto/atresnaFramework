<?php

namespace Atresna\Atresnaframework\core;

use Atresna\Atresnaframework\core\Request;

class Router
{
    protected array $routes = [];
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }


    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if (!$callback) {
            echo 'Not Found';
            exit;
        }
        echo call_user_func($callback);
        // var_dump($this->routes);
    }
}
