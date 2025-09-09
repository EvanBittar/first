<?php

USE Core\Valuded;
use Core\App;
use Core\database;

$db = App::resolve(database::class);

$curruserid=1;
$note = $db->query('select * from notes where id=:id',[
    'id'=>$_POST['id']
])->findOrFales();

authoize($note['id_user'] == $curruserid);

$errore = [];

if(! valuded::string($_POST['body'],1,10)){
    $errore['body'] = 'A body is required';
}

if(count($errore)){
    return view('notes/edit.view.php',[
        'heading'=> 'Edit Note',
        'errore'=>$errore,
        'note'=>$note
    ]);
}

    $db->query('update notes set body = :body where id = :id',[
        'body' => $_POST['body'],
        'id' => $_POST['id']
    ]);

    header('location: /php/notes');
    die();
