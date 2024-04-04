<?php

namespace Atresna\Atresnaframework\core\utils;

class Debug
{
    static function debugInfo($data)
    {
        $html = print_r($data);
        $html = die;
        return $html;
    }
}