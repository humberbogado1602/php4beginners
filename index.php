<?php 

//ahora el bootstrap.php se encarga de crear la conexión y servir la db listo para que consultemos, es decir, pasemos métodos
$database = require 'bootsrap.php';

$tasks = $database->selectAll('todos');

require 'index.view.php';