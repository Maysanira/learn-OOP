<?php

require_once 'robot.php';
// inheritance atau pewarisan
class robot_hewan extends robot{

    public function get_kekuatan(){
        echo 'saya hewan laut bisa berenang...';
    }
    // overriding
    public function get_suara(){
        return 'suaranya addalah ...'.$this->suara;
      } 
}

 ?>