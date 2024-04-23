<?php

namespace Atresna\Atresnaframework\core\form;

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\Model;
use Atresna\Atresnaframework\core\form\InputField;

class Form
{
    private static $token;
    function __construct()
    {
        $this->setToken();
    }
    public static function begin($action, $method, $titleForm)
    {
        if (!isset($_SESSION['csrf_token'])) {
            self::setToken();
        }
        $token = $_SESSION['csrf_token'];
        $csrfField = ' <input type="text" name="csrf_token" hidden value="' . $token . '" id="">';
        echo sprintf('
        <form class="flex flex-row gap-15" action="%s" method="%s"> <h1 class="form-title">%s</h1> %s
        ', $action, $method, $titleForm, $csrfField);
        return new Form();
    }

    private static function setToken()
    {
        if (!isset($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
            $token = $_SESSION['csrf_token'];
            self::$token = $token;
        }
    }


    public static function end()
    {
        return '</form>';
    }

    public function field(Model $model, $atrribute)
    {
        return new InputField($model, $atrribute);
    }

    function textField(Model $model, $atrribute)
    {
        return new TextAreaField($model, $atrribute);
    }

}