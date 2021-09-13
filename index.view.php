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
    <ul>
        <?php foreach($person as $key => $feature): ?> <!-- así referenciamos la clave valor, si deseamos mostrar ambas. Sino, mostraría solo valor -->
            <li><strong><?= $key ?></strong> <?= $feature ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>