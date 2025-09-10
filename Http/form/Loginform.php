<?php


namespace Http\form;

use Core\Valuded;

class Loginform{

protected $errore = [];

public function validate($email,$password){

if (!Valuded::email($email)) {
    $errore['email'] = 'Please enter a valid email address.';
}
if (!Valuded::string($password)) {
    $errore['password'] = 'Password not match.';
}
return empty($errore) ;
}
public function getErrore(){
    return $this->errore;
}
public function error($key,$value){
    $this->errore[$key] = $value;
}
}