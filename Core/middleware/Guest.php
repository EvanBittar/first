<?php

namespace Core\middleware;

class Guest{
    public function heandle(){
    if( $_SESSION['user'] ?? false){
        header("Location: /php/");
        die();
    }
}
}