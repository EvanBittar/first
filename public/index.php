<?php

use Core\Session;

const BASE__PATH = __DIR__ . "/../";
require BASE__PATH .  'core/function.php';

session_start();

spl_autoload_register(function ($class){

$class =  str_replace("\\",DIRECTORY_SEPARATOR,$class);
require_once base_path($class.'.php');
});

require base_path('bootstrap.php');

$router = new \Core\Router();

$routes =  require base_path('route.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);

Session::removeFlash();