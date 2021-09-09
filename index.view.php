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
        <!-- #1: Abrimos el foreach y metemos el html, cuesta escalar este código -->
        <?php
            foreach ($names as $name){
                echo "<li>$name</li>";
        }
        ?>

        <!-- #2 -->
        <?php foreach ($names as $name): ?><!-- una para abrir, notar los dos pts -->
            <li><?= $name ?></li> <!-- html. Php solo cuando se lo necesite -->
        <?php endforeach ?> <!-- el cierre -->
    </ul>
</body>
</html>