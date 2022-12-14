<?php
require('./partials/header.php');
?>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <li><?= $task->item ?></li>

    <?php endforeach; ?>

</ul>


<?php
require('./partials/footer.php');
?>