<?php 

require 'vendor/autoload.php'; //no olvidar este require, ya no hace falta controlar nada más
//ahora el bootstrap.php se encarga de crear la conexión y servir la db listo para que consultemos, es decir, pasemos métodos
require 'core/bootsrap.php';

require Router::load('routes.php')
 ->direct(Request::uri(), Request::requestType());