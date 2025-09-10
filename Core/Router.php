<?php

namespace Core;

use Core\middleware\Middleware;

class router{
    public  $routes = [];

    public function add($uri,$controller,$method){
            $this->routes[] = [
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=> $method,
            'middleware'=> null
        ];

        return $this;
    
    }
    public function get($uri,$controller){
        $method = 'GET';
        $this->add($uri,$controller,$method);
    return $this;
    }
    public function post($uri,$controller){
        $method ='POST';      
        $this->add($uri,$controller,$method);
    return $this;
    }
    public function delete($uri,$controller){
        $method= "DELETE";
        $this->add($uri,$controller,$method);
    return $this;
    }
    public function patch($uri,$controller){
        $method= 'PATCH';
        $this->add($uri,$controller,$method);
    return $this;
    }
    public function put($uri,$controller){
        $method= 'PUT';
        $this->add($uri,$controller,$method);
    return $this;
    }
    
    public function only($key){
        $this->routes[array_key_last(($this->routes))]['middleware'] = $key;
        return$this; 
    }

    public function route($uri , $method){
        foreach ($this->routes as $route) {
        if ($route['uri'] == $uri && $route['method'] == strtoupper($method)){
            Middleware::resolve($route['middleware']);
            return require base_path('Http/cont/'.$route['controller']);
        }
        }
        $this->abort();
    }
    
    protected function abort($code = 404){
        http_response_code(404);
        
        require base_path("views/{$code}.php");
        
        die();
}
}
