<?php

namespace Atresna\Atresnaframework\core\form;

use Atresna\Atresnaframework\core\Model;
use Atresna\Atresnaframework\core\form\Field;

class Form
{
    public static function begin($action, $method, $titleForm)
    {
        echo sprintf('
        <form class="flex flex-row gap-15" action="%s" method="%s"> <h1 class="form-title">%s</h1>
        ', $action, $method, $titleForm);
        return new Form();
    }

    public static function end()
    {
        return '</form>';
    }

    public function field(Model $model, $atrribute)
    {
        return new Field($model, $atrribute);
    }

}
