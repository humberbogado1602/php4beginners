<?php 

class Request  
{

    public static function uri()
    {
        return (trim($_SERVER['REQUEST_URI'], '/')); //trim para quitar los fslash al ppio y al final
    }
}
