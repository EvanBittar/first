<?php

use Core\Session;
use Core\Authenticator;
use Http\form\Loginform;

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


$form = new Loginform();
if ($form->validate($email,$password)){
    if((new Authenticator())->auth($email,$password)){
        redirect('/php/');
    }else{
        $form->error('password','email or Password is incorrect.');
    }
}
Session::flash('errore',$form->getErrore());

redirect('/php/login');
// return view('login/create.view.php', [
//     'errore' => $form->getErrore()
// ]);
