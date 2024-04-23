<?php


namespace Atresna\Atresnaframework\core\exceptions;


use Atresna\Atresnaframework\core\Application;
use Exception;

class ForbiddenException extends Exception
{
    protected $code = 403;
    protected $message = 'You don\'t have premission to access this pages';
}