<?php

namespace Atresna\Atresnaframework\core\utils;

class Debug
{
    static function debugInfo($data)
    {
        $html = "<pre>";
        $html = " " . var_dump($data);
        $html = ".</pre>";
        $html = die;
        return $html;
    }
}
