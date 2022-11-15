


<?php
require_once 'robot.php';

$robot1 = new robot;
$robot2 = new robot;

$robot1->set_suara('auuu auuu auuuuuuu');
    echo 'bunyinya ...'.$robot1->get_suara().'<br>';

    $robot2->set_suara('tut tut tuttttttt');
    echo 'bunyinya ...'.$robot2->get_suara();
// echo 'suara robotnya ...'.$robot1->suara.'beratnya'.$robot1->berat;
?>