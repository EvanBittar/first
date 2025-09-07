<?php

namespace Core;

class router{
    public  $routes = [];

    public function add($uri,$controller,$method){
            $this->routes[] = [
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=> $method
        ];
    
    }
    public function get($uri,$controller){
        $method = 'GET';
        $this->add($uri,$controller,$method);
    }
    public function post($uri,$controller){
        $method ='POST';      
        $this->add($uri,$controller,$method);
    }
    public function delete($uri,$controller){
        $method= "DELETE";
        $this->add($uri,$controller,$method);
    }
    public function patch($uri,$controller){
        $method= 'PATCH';
        $this->add($uri,$controller,$method);
    }
    public function put($uri,$controller){
        $method= 'PUT';
        $this->add($uri,$controller,$method);
    }
    
    public function route($uri , $method){
        foreach ($this->routes as $route) {
        if ($route['uri'] == $uri && $route['method'] == strtoupper($method)){
            return require base_path($route['controller']);
        }
        }
        // dd($_SERVER);
        $this->abort();
    }
    
    protected function abort($code = 404){
        http_response_code(404);
        
        require base_path("views/{$code}.php");
        
        die();
}
}
