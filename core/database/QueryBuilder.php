<?php 

class QueryBuilder  
{
    protected $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}"); //prepara, no ejecuta

        $statement->execute();
    
        return ($statement->fetchAll(PDO::FETCH_CLASS)); //fetchAll() para mostrar los resultados
    
    }
}
