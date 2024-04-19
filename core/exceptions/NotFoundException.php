<?php


namespace Atresna\Atresnaframework\core\exceptions;

use Exception;

final class NotFoundException extends Exception
{
    protected $code = 404;
    protected $message = 'Not Found Page';
}
