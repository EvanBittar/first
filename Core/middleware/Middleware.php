<?php

namespace Core\middleware;

class Middleware{
    public const MAP = [
        'guest' => \Core\middleware\Guest::class,
        'auth' => \Core\middleware\Auth::class,
    ];

    public static function resolve($key){
        if(!$key) {
            return;
        }
        $middleware = Middleware::MAP[$key] ?? null;
        if (!$middleware) {
            throw new \Exception("No Middleware found for key '{$key}' ");
        }
        (new $middleware)->heandle();
    }
}