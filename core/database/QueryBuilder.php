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

    public function insert($table,$parameters)
    {
        // implode() -> hace de un arreglo un string separado por un caracter indicado
        // sprintf() -> prepara un string formateado, recibe string con placeholders y luego los valores para ellos
        // array_keys() -> devuelve un arreglo con las claves de un arreglo indicado
        // header() -> redirige a la ruta indicada

        //una forma muy prolija de preparar la consulta sql
        $sql = sprintf('insert into %s (%s) values (%s)',
        $table,
        implode(', ', array_keys($parameters)),
        ':' . implode(', :', array_keys($parameters)) //acá usamos placeholders, anteponemos : para pasar todos los datos al momento de ejecutar, así es más seguro
        );

        try {
            $statement = $this->pdo->prepare($sql);
    
            $statement->execute($parameters);

        } catch (Exception $e) {
            die('An error has ocurred');
        }
    }
}
