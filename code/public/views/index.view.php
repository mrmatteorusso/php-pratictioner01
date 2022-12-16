<?php
require('./partials/header.php');
?>


<h3>Insert new name</h3>


<form method="POST" action="/tasks">
    <label for="task"></label>
    <input id="task" type="text" name="task" placeholder="New Task">
    <button type="submit">Insert</button>
</form>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li><?= $task->item ?></li>

    <?php endforeach; ?>

</ul>


<?php
require('./partials/footer.php');
?>