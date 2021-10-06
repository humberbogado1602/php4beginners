<?php 

//nuevo met, vamos a enlazar config con el archivo de configuración
App::bind('config', require 'config.php');

$config = App::get('config');

//lo mismo acá
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));
