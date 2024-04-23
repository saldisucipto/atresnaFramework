<?php

namespace Atresna\Atresnaframework\core;

class Response
{
    public function setStatusCode(int $code)
    {
        http_response_code($code);
    }

    function redirect(string $url)
    {
        // to another route
        header('Location: ' . $url);
    }


}