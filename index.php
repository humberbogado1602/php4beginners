<?php 

$name = htmlspecialchars($_GET['name']);
$surname = htmlspecialchars($_GET['surname']);
$greeting = "Hello, $name $surname";

require 'index.view.php'; /* de esta forma hacemos la referencia para que la vista haga a la variable */