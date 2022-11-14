


<?php
// <!-- class -->
class robot{

    // <!-- property -->
    public $suara = 'ngik ngik';
    public $berat = 30;

// metode
// public function bersuara(){
//     echo 'suara robotnya ...'.$this->suara;
// }
// public function berat_robot(){
//     return $this->berat;
// }

// metode set (setting) && get
public function set_suara($suara){
        $this->suara = $suara;
}
public function get_suara(){
    return $this->suara;
}

}
$robot1 = new robot;
$robot2 = new robot;

$robot1->set_suara('auuu auuu auuuuuuu');
    echo 'bunyinya ...'.$robot1->get_suara();
    $robot2->set_suara('tut tut tuttttttt');
    echo 'bunyinya ...'.$robot2->get_suara();
// echo 'suara robotnya ...'.$robot1->suara.'beratnya'.$robot1->berat;
?>