<?php

namespace Atresna\Atresnaframework\core;

use Atresna\Atresnaframework\core\exceptions\NotFoundException;
use Atresna\Atresnaframework\core\Request;
use Atresna\Atresnaframework\core\utils\Debug;

class Router
{
    protected array $routes = [];
    public Request $request;
    public Response $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }


    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->method();
        $callback = $this->routes[$method][$path] ?? false;
        // Debug::debugInfo($callback);
        if (!$callback) {
            Application::$app->response->setStatusCode(404);
            return throw new NotFoundException();
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        if (is_array($callback)) {

            $controller = new $callback[0]();
            Application::$app->controllers = $controller;
            $controller->actions = $callback[1];
            $callback[0] = $controller;
            // var_dump($controller->getMiddleWare());
            foreach ($controller->getMiddleWare() as  $middleware) {
                $middleware->execute();
            }
        }
        return call_user_func($callback, $this->request, $this->response);
    }

    public function renderView($view, $params = [])
    {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->renderOnlyView($view, $params);
        return str_replace("{{content}}", $viewContent, $layoutContent);
    }

    public function renderContent($viewContent)
    {
        $layoutContent = $this->layoutContent();
        return str_replace("{{content}}", $viewContent, $layoutContent);
    }

    public function layoutContent()
    {
        $layout = Application::$app->layout; // get value default from application class
        if (Application::$app->controllers) {
            $layout = Application::$app->controllers->getLayout();
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/$layout.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view, $params = [])
    {
        // Debug::debugInfo($params);
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        return ob_get_clean();
    }
}
