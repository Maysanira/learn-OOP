<?php

class robot{

    
// public protected private
  //property
  public $suara;
  public $berat;

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
public function __construct($suara,$berat){
  $this->suara = $suara;
  $this->berat = $berat;
  // echo 'halo robot ...';
}

// metode set (setting) && get
public function set_suara($suara){
      $this->suara = $suara;
} 
public function get_suara(){
  return $this->suara;
}

public function set_berat(){
  $this->berat = $berat;
}
public function get_berat(){
  return $this->berat;
} 



}


?>