<?php

use Core\Session;


view('login/create.view.php',[
    'errore' => Session::get('errore')
]);