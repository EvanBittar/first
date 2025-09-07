<?php

namespace Core;

class App{

    public static $container;

    public static function setcontainer($container){
        static::$container = $container;
    }

    public static function container(){
        return static::$container ;
    }

    public static function resolve($key){
        return static::$container->get($key);
    }

    public static function add($key,$resolver){
        static::$container->add($key,$resolver);
    }

}