<?php


namespace Atresna\Atresnaframework\core\middleware;

use Atresna\Atresnaframework\core\Response;

abstract class BaseMiddleWare extends Response
{
    abstract function execute();
}