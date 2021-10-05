<?php 

//nuevo método insert, recibe una tabla y un arreglo con los valores a insertar
$app['database']->insert('users',
    [
        'name' => $_POST['name'],
    ]
) ;