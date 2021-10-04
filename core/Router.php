<?php 

class Router  
{
    // esta separacion esta hecha para que no se pueda acceder a las uri de post desde la barra de navegacion, accederemos desde dnd corresponda
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static; //necesito una instancia de Router        

        require $file;

        return $router; //esta es nuestra instancia
    }

    public function get($uri, $controller)
    {
        //clave-valor
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }    

    // busca el uri y redirige al controlador
    // tb recibe el request type para saber donde buscar
    public function direct($uri, $requestType)
    {
        //sirve para buscar una clave en un arreglo, fun booleana
        if (array_key_exists($uri, $this->routes[$requestType])){
            return $this->routes[$requestType][$uri];
        }
        throw new Exception("No route define for this URI");
        
    }
}
