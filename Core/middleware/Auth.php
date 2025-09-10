<?php

namespace Core\middleware;

class Auth{
    public function heandle(){
    if(! $_SESSION['user'] ?? false){
        header("Location: /php/");
        die();
    }
}
}