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
            <strong>Status:</strong>
            <?php if($task['completed']): //if(! true) for the contrary of..?> 
                <span>&#9989;</span>
            <?php else: ?>
                <span>&#10060;</span>
            <?php endif; ?>

        </li>
    </ul>
</body>
</html>