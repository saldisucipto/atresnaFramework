<section class="my-10">
    <form class="flex flex-row gap-15" action="/register" method="post">
        <h1 class="form-title">Register Form</h1>
        <div class="flex flex-col gap-10">
            <div class="flex flex-row gap-10">
                <label class="form-column-label" for="">First Name</label>
                <input class="form-column <?php echo $model->hasError('firstname') ? ' invalid-form-column' : '' ?>"
                    type="text" value="<?php echo $model->firstname ?>" placeholder="First Name" name="firstname">

                <div class="invalid-feedback">
                    <?php echo $model->getFirstError('firstname') ?>
                </div>
            </div>
            <div class=" flex flex-row gap-10 ">
                <label class="form-column-label" for="">Last Name</label>
                <input class="form-column " type="text" placeholder="Last Name" name="lastname">
            </div>
        </div>

        <div class=" flex flex-row gap-10 ">
            <label class="form-column-label" for="">Email</label>
            <input class="form-column" type="email" placeholder="Your Email" name="email">
        </div>
        <div class=" flex flex-row gap-10 ">
            <label class="form-column-label" for="">Password</label>
            <input class="form-column" type="password" placeholder="Type Password" name="password">
        </div>
        <div class=" flex flex-row gap-10 ">
            <label class="form-column-label" for="">Confirm Password</label>
            <input class="form-column" type="password" placeholder="Type Password Confirmation" name="passwordConfirm">
        </div>

        <button class="btn-simpan" type="submit">Register</button>

    </form>
</section>