<?php

use Core\App;
use Core\database;

$db = App::resolve(database::class);

$notes= $db->query("select * from notes where id_user = 1")->fetchAll();



view( 'notes/index.view.php',[
    'heading'=> 'My  Notes',
    'notes'=> $notes
]);