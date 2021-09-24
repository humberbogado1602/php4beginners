<?php 

class Connection  
{
    public static function make()
    { //aca se hace la conexión, es estática para ser llamada sin ser instanciada
        try {
            return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
        } catch (PDOException $e) { 
            //manejo de excepciones
            die($e->getMessage());
        }
    }
}
