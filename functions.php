<?php 

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}
 
//conexión a la DB
function connectToDb()
{
    try {
        return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
    } catch (PDOException $e) { 
        //manejo de excepciones
        die($e->getMessage());
    }
}

function fetchAllTasks($connection)
{
    $statement = $connection->prepare('select * from todos'); //prepara, no ejecuta

    $statement->execute();

    return ($statement->fetchAll(PDO::FETCH_CLASS, 'Task')); //fetchAll() para mostrar los resultados
}