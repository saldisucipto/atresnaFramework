<?php

namespace Atresna\Atresnaframework\core\middleware;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\exceptions\ForbiddenException;
use Atresna\Atresnaframework\core\Response;

class AuthMiddleWare extends BaseMiddleWare
{

    // properties middleware
    public array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }
    function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controllers->actions, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}