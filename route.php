<?php 

// return [
//     '/php/' => 'cont/index.php',
//     '/php/about'=> 'cont/about.php',
//     '/php/notes' => 'cont/notes/index.php',
//     '/php/show'=> 'cont/notes/show.php',
//     '/php/edit'=> 'cont/notes/edit.php',
//     '/php/notes/create' => 'cont/notes/create.php',
//     '/php/contact' => 'cont/contact.php',
// ];
$router->get('/php/','index.php');
$router->get('/php/about','about.php');
$router->get('/php/contact','contact.php');

$router->get('/php/notes','notes/index.php')->only('auth');

$router->get('/php/show','notes/show.php');
$router->delete('/php/show','notes/destroy.php');

$router->get('/php/notes/edit','notes/edit.php');
$router->patch('/php/notes/edit','notes/update.php');

$router->get('/php/notes/create','notes/create.php');
$router->post('/php/notes/create','notes/store.php');

$router->get('/php/register','registertion/create.php')->only('guest');
$router->post('/php/register','registertion/store.php');

$router->get('/php/login','login/create.php')->only('guest');
$router->post('/php/login','login/store.php')->only('guest');
$router->delete('/php/login','login/delete.php')->only('auth');