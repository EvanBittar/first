<?php

use Core\App;
use Core\database;

$db = App::resolve(database::class);

$curruserid=1;

$note = $db->query("select * from notes where id=:id",
["id"=>$_GET['id']])->findOrFales();

authoize($note['id_user'] == $curruserid);

view( 'notes/show.view.php',[
'heading'=> 'Note',
'note'=> $note
]);
