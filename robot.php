<?php

class robot{

   //property
    public $suara = ;
    public $berat = ;

// metode
// public function bersuara(){
//     echo 'suara robotnya ...'.$this->suara;
// }
// public function berat_robot(){
//     return $this->berat;
// }


// public function get_suara(){
//     return $this->suara;
// }

// konstruktor
public function __construct(){
    echo 'halo robot ...';
}

// metode set (setting) && get
public function set_suara($suara){
        $this->suara = $suara;
} 
public function get_suara(){
    return $this->suara;
}
}
?>