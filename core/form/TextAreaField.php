<?php

namespace Atresna\Atresnaframework\core\form;

class TextAreaField extends BaseField
{
    function renderInput(): string
    {
        return sprintf(
            '<textarea class="form-column %s"
                        value="%s" placeholder="%s" name="%s"></textarea>',
            $this->model->hasError($this->atrribute) ? ' invalid-form-column' : '',
            $this->model->{$this->atrribute},
            $this->model->getLabels($this->atrribute),
            $this->atrribute,
        );
    }

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
}
