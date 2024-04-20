<?php

namespace Atresna\Atresnaframework\core\form;

use Atresna\Atresnaframework\core\Model;
use Atresna\Atresnaframework\core\form\BaseField;


class InputField extends BaseField
{
    // Constanta Variable
    public const TYPE_TEXT = "text";
    public const TYPE_PASSWORD = "password";
    public const TYPE_NUMBER = "number";
    // PROPERTIES 
    public string $type;

    public function __construct(Model $model, string $atrribute)
    {
        $this->type = self::TYPE_TEXT;
        parent::__construct($model, $atrribute);
    }

    function renderInput(): string
    {
        return sprintf(
            '<input class="form-column %s"
                type="%s" value="%s" placeholder="%s" name="%s">',
            $this->model->hasError($this->atrribute) ? ' invalid-form-column' : '',
            $this->type,
            $this->model->{$this->atrribute},
            $this->model->getLabels($this->atrribute),
            $this->atrribute,
        );
    }

    // to string function 
    public function __toString()
    {
        return sprintf(
            '<div class="flex flex-row gap-10">
                            <label class="form-column-label" for="">%s</label>
                            %s
                            <div class="invalid-feedback">
                                %s
                            </div>
                        </div>',
            $this->model->getLabels($this->atrribute),
            $this->renderInput(),
            $this->model->getFirstError($this->atrribute),
        );
    }


    public function passwordField(): string
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}
