<?php 

class Connection  
{
    //se pasa un arreglo con los datos de la conexión, ya no está harcoded
    public static function make($config)
    { //aca se hace la conexión, es estática para ser llamada sin ser instanciada
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['dbname'],
                $config['user'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) { 
            //manejo de excepciones
            die($e->getMessage());
        }
    }
}
