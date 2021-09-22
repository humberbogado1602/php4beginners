<?php 

require 'functions.php';

class Task  //clase, es como una plantilla de lo que queremos llenar
{
    // por cuestiones de encapsulamiento, deberían ser protegidas. Por el momento van así nomás
    public $description;

    public $completed = false; //ya seteamos pq cdo creamos una tarea, es obvio que está imcompleta

    public function __construct($description) //constructor, se dispara automáticamente cdo instanciamos
    {
        $this->description = $description;
    }

    public function isComplete() //consulta el estado de la tarea
    {
        return $this->completed;
    }

    public function complete() //marca una tarea como completa
    {
        $this->completed = true;
    }
}

// creamos un arreglo para la lección
$tasks = [
    new Task('Finish the course'), //así se instancia (crea) un objeto, este dispara el constructor
    new Task('Finish lesson 11'),
    new Task('Have lunch')
];

$tasks[1]->complete();


require 'index.view.php';