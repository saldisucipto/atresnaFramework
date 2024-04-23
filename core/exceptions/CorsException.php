<?php

class CorsException extends Exception
{

    protected $code = 403;
    protected $message = "You don\'t have premission to make the request";
}