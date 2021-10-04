<?php 

//ahora el bootstrap.php se encarga de crear la conexión y servir la db listo para que consultemos, es decir, pasemos métodos
require 'core/bootsrap.php';

require Router::load('routes.php')
 ->direct(Request::uri(), Request::requestType());