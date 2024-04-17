<section class="my-10">

    <?php $form = Atresna\Atresnaframework\core\form\Form::begin('/login', 'POST', 'Login') ?>

    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>

    <button class="btn-simpan" type="submit">Login</button>

    <?php echo Atresna\Atresnaframework\core\form\Form::end() ?>
</section>