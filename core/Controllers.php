<?php

namespace Atresna\Atresnaframework\core;

class Controllers
{
    public function render($view, $params)
    {
        return Application::$app->router->renderView($view, $params);
    }
}
