<?php

use Atresna\Atresnaframework\core\Application;
use Atresna\Atresnaframework\core\View;

/** @var $this Atresna\Atresnaframework\core\View */
$this->title = "Home";

?>

<?php if (Application::$app->session->getFlash('success')) : ?>
    <div>
        <?php echo Application::$app->session->getFlash('success'); ?>
    </div>
<?php endif; ?>

<div>

</div>
<h1>Home</h1>