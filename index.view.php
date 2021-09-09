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
    <header>
        <h1>
            <?= $greeting; ?> <!-- aquí solo nos limitamos a mostrar la variable, separando claramente las tareas -->
        </h1>
    </header>
</body>
</html>