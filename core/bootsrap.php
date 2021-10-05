<?php 

$app = [];

$app['config'] = require 'config.php';

//ya no necesito mil requires aca, todo lo hace el autoloader en index

$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
