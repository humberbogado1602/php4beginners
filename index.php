<?php 

//separamos las funciones, en su propio archivo
//luego del require podemos usar las funciones que contiene ese fichero
require 'functions.php';

$animals = ['cat', 'dog', 'duck'];

// dd($animals); //comentada porque voy a poner la tarea abajo

if (allowedAge(19)) {
    echo "You're allowed, come on inside!";
}else{
    echo "You're not allowed, sorry";
}