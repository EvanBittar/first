<?php

use Core\App;
use Core\database;

$db = App::resolve(database::class);

$curruserid=1;


$note = $db->query("select * from notes where id=:id",
["id"=>$_POST['id']])->findOrFales();

authoize($note['id_user'] == $curruserid);
    $db->query("DELETE FROM notes WHERE id=:id",[
    'id'=>$_POST['id']
]);
    header("location: notes");
    exit();
