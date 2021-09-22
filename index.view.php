<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            background-color: #3e3e3e;
            color: aliceblue;
            padding: 2em;
            text-align: center
        }
    </style>
</head>
<body>
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
</body>
</html>