<?php 

class Request  
{

    public static function uri()
    {
        // nueva forma de tratar la url, nos quita el query string
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
    }

    public static function requestType()
    {
        return $_SERVER['REQUEST_METHOD']; //me devuelve el tipo de request para buscar los controladores luego
    }
}
