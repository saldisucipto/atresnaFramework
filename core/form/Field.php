<?php

namespace Atresna\Atresnaframework\core\form;

use Atresna\Atresnaframework\core\Model;


class Field
{
    // Constanta Variable
    public const TYPE_TEXT = "text";
    public const TYPE_PASSWORD = "password";
    public const TYPE_NUMBER = "number";
    // PROPERTIES 
    public Model $model;
    public string $atrribute;
    public string $type;


    public function __construct(Model $model, string $atrribute)
    {
        $this->model = $model;
        $this->atrribute = $atrribute;
        $this->type = self::TYPE_TEXT;
    }

    // to string function 
    public function __toString()
    {
        return sprintf(
            ' <div class="flex flex-row gap-10">
        <label class="form-column-label" for="">%s</label>
        <input class="form-column %s"
            type="%s" value="%s" placeholder="%s" name="%s">
        <div class="invalid-feedback">
            %s
        </div>
    </div>',
            $this->model->getLabels($this->atrribute),
            $this->model->hasError($this->atrribute) ? ' invalid-form-column' : '',
            $this->type,
            $this->model->{$this->atrribute},
            $this->model->getLabels($this->atrribute),
            $this->atrribute,
            $this->model->getFirstError($this->atrribute),
        );
    }


    public function passwordField(): string
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}
