<?php

use Core\Authenticator;
use Http\form\Loginform;

$email = $_POST['email'];
$password = $_POST['password'];


$form = new Loginform();
if ($form->validate($email,$password)){
    if((new Authenticator())->auth($email,$password)){
        redirect('/php/');
    }else{
        $form->error('pasword','email is not correct or Password not match');
    }
}

view('login/create.view.php', [
    'errore' => $form->getErrore()
]);

