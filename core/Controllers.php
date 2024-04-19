<?php

namespace Atresna\Atresnaframework\core;

use Atresna\Atresnaframework\core\middleware\BaseMiddleWare;

class Controllers
{
    // properties 
    protected string $layout = "main";
    /**
     * @var \Atresna\Atresnaframework\core\middleware\BaseMiddleWare[]
     */
    // middleware 
    public array $middlewares = [];

    public string $actions = "";


    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function setLayout($layout)
    {
        $this->layout = $layout;
    }

    public function getLayout(): string
    {
        return $this->layout;
    }

    public function registerMiddleware(BaseMiddleWare $middleware)
    {
        $this->middlewares[] = $middleware;  // memberikan value pada middleware current value middleware
    }

    // getter middleware 
    /**
     * @var Atresna\Atresnaframework\core\middleware\BaseMiddleware[]
     */
    public function getMiddleWare(): array
    {
        return $this->middlewares;
    }
}
