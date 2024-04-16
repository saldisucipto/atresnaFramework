<?php

use Atresna\Atresnaframework\core\Application;
?>

<?php if (Application::$app->session->getFlash('success')) : ?>
    <div>
        <?php echo Application::$app->session->getFlash('success'); ?>
    </div>
<?php endif; ?>

<div>

</div>
<h1>Home</h1>