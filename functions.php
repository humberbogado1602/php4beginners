<?php 

function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

//homework
function allowedAge($age){
    if ($age >= 18) {
        return true;
    }else{
        return false;
    }
}