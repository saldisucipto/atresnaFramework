<?php

namespace Atresna\Atresnaframework\core;

class Controllers
{
    // properties 
    protected string $layout = "main";
    public function render($view, $params =[])
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function setLayout($layout){
        $this->layout = $layout;
    }

    public function getLayout() : string {
        return $this->layout;
    }
}