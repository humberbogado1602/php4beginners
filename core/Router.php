<?php 

class Router  
{
    protected $routes = [];

    public static function load($file)
    {
        $router = new static; //necesito una instancia de Router        

        require $file;

        return $router; //esta es nuestra instancia
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    // busca el uri y redirige al controlador
    public function direct($uri)
    {
        //sirve para buscar una clave en un arreglo, fun booleana
        if (array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }
        throw new Exception("No route define for this URI");
        
    }
}
