<?php 

// arreglo asociativo, clave valor
$person = [
    'age' => 25,
    'hair' => 'brown',
    'career' => 'web dev'
];

$person['name'] = 'Humberto'; //así agregamos elementos
unset($person['hair']); //así los quitamos

echo('<pre>'); //para que sea más presentable
var_dump($person); //echo sirve solo para strings, así podemos "ver" la variable
echo('</pre>');
die(); //detenemos la ejecución, se puede poner todo junto con la de arriba

require 'index.view.php';