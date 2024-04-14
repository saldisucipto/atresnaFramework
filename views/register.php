<section class="my-10">
    <?php $form = Atresna\Atresnaframework\core\form\Form::begin('', 'POST', 'Register Form') ?>
    <div class="flex flex-col gap-10">
        <?php echo $form->field($model, 'firstanme') ?>
        <?php echo $form->field($model, 'lastname') ?>
    </div>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>

    <button class="btn-simpan" type="submit">Register</button>

    <?php echo Atresna\Atresnaframework\core\form\Form::end() ?>
</section>