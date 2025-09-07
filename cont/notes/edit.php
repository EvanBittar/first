<?php

use Core\App;
use Core\database;

$db = App::resolve(database::class);

$curruserid=1;
$note = $db->query('select * from notes where id=:id',[
    'id'=>$_GET['id']
])->findOrFales();

authoize($note['id_user'] == $curruserid);

view( 'notes/edit.view.php',[
    'heading'=> 'Edit Notes',
    'errore'=> [],
    'note'=>$note
]);

