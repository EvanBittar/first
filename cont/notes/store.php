<?php


use Core\App;
use Core\valuded;
use Core\database;

$db = App::resolve(database::class);

$errore = [];

if(! valuded::string($_POST['body'],1,1000)){
    $errore['body'] = 'A body is required';
    
}
    if(! empty($errore)){
    return view( 'notes/create.view.php',[
    'heading'=> 'Create Notes',
    'errore'=> $errore
]);
    }

    if(empty($errore)){
    $db->query("INSERT INTO notes(body , id_user) VALUES(:body , :id_user)",[
    'body' => $_POST['body'],
    'id_user' => 1
]);        
}
header("location: /php/notes");
exit();