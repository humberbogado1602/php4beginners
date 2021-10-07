<?php 

require 'vendor/autoload.php'; //no olvidar este require, ya no hace falta controlar nada más
//ahora el bootstrap.php se encarga de crear la conexión y servir la db listo para que consultemos, es decir, pasemos métodos
require 'core/bootsrap.php';

use App\Core\{Router,Request}; //use para varias dependencias, php7+

Router::load('app/routes.php')
 ->direct(Request::uri(), Request::requestType());