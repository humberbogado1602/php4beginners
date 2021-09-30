<?php require('partials/head.php') ?> <!-- traemos el primer partial -->
<!-- código específico del index, abajo  -->
<h1>Task list!</h1>

<!-- Iteramos el arreglo y mostramos tareas, la que está completada se muestra tachada, fin. -->
<ul>
    <?php foreach($tasks as $task): ?>
        <li>
            <?php if($task->completed): ?>
                <del><?= $task->description; ?></del> <!-- del es un tag para tachar -->
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php require('partials/footer.php') ?> <!-- cierre del documento -->