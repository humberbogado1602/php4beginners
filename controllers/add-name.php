<?php 

//nuevo método insert, recibe una tabla y un arreglo con los valores a insertar
App::get('database')->insert('users',
    [
        'name' => $_POST['name'],
    ]
) ;