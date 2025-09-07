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
$router->get('/php/','cont/index.php');
$router->get('/php/about','cont/about.php');
$router->get('/php/contact','cont/contact.php');

$router->get('/php/notes','cont/notes/index.php');
$router->get('/php/show','cont/notes/show.php');
$router->delete('/php/show','cont/notes/destroy.php');
$router->get('/php/notes/create','cont/notes/create.php');
$router->post('/php/notes/create','cont/notes/store.php');