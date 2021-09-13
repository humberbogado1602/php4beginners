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

    <ul>
        <li>
            <strong>Task</strong>: <?= $task['title']; ?>
        </li>
        <li>
            <strong>Due date</strong>: <?= $task['due']; ?>
        </li>
        <li>
            <strong>Assinged to</strong>: <?= $task['assigned_to']; ?>
        </li>
        <li>
            <!-- Operador ternario -->
            <!-- true? 'Do smth' : 'Do smth else' -->
            <strong>Completed</strong>: <?= $task['completed']? 'Yes': 'No'; ?>
        </li>
    </ul>
</body>
</html>