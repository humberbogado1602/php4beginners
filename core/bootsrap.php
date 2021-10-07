<?php 

//nuevo met, vamos a enlazar config con el archivo de configuración
App::bind('config', require 'config.php');

$config = App::get('config');

//lo mismo acá
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

//una fcion para acceder a las vistas "mas elegantemente"
function view($name, $data=[])
{
    extract($data);

    return require "views/{$name}.view.php";
}

function redirect($path){
    return header("Location: {$path}");
}
