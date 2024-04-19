<?php

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\form\TextAreaField;
use Atresna\Atresnaframework\core\form\Form;

?>
<?php if (Application::$app->session->getFlash('success')) : ?>
    <div>
        <?php echo Application::$app->session->getFlash('success'); ?>
    </div>
<?php endif; ?>


<section class="my-10">
    <?php $form = Form::begin('', 'POST', 'Contact Form') ?>
    <?php echo $form->field($model, 'subject') ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->textField($model, 'body') ?>

    <button class="btn-simpan" type="submit">Send</button>

    <?php echo Form::end() ?>
</section>