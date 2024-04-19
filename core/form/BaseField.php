<?php

namespace Atresna\Atresnaframework\core\form;

use Atresna\Atresnaframework\core\Model;


abstract class BaseField
{
    public string $type;
    public Model $model;
    public string $atrribute;


    public function __construct(Model $model, string $atrribute)
    {
        $this->model = $model;
        $this->atrribute = $atrribute;
    }

    abstract public function renderInput(): string;
}
