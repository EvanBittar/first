<?php

namespace Core;

use PDO;

class database{
    public $connected;
    public $statmant;
    public function __construct($config,$username='evan', $password= 'evan'){
        $dns = 'mysql: '. http_build_query($config['database'],'',';');
        // dd($dns);
        $this->connected = new PDO( $dns,$username,$password,[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
    public function query($query,$params=[]){
    $this->statmant = $this->connected->prepare($query);
    $this->statmant->execute($params);
    return $this;
}
public function fetchAll(){
    return $this->statmant->fetchAll();
}
public function findOrFales(){
    if($this->statmant)
    return $this->statmant->fetch();
    else
    return abort();
}
}