<?php

use Core\respone;


require 'respone.php';

function dd($value){
    
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function UrlIs($value){
    return $_SERVER['REQUEST_URI'] === $value ;
}

function abort($code = 404){
        http_response_code(404);
        
        require base_path("views/{$code}.php");
        
        die();

}

function authoize($condition,$status=respone::FORBIDDEN){
if(!$condition)
return abort($status);
}
function base_path($path){
    return __DIR__ . '/../' . $path;
}
function view($path,$attribute=[]){
    extract($attribute);

    require base_path('views/'. $path);
}