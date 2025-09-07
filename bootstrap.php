<?php

use Core\App;
use Core\database;
use Core\Container;

$container = new Container();

$container->add('Core\database', function(){
    $config = require base_path('config.php');
    return new database($config);

});
$db = $container->get('Core\database');

App::setcontainer($container);