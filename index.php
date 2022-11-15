


<?php
require_once 'robot.php';

$robot1 = new robot('ngik ngik ngok',20);
$robot2 = new robot('titut titut',30);

$robot1->set_berat(30);
    echo 'beratnya..'.$robot1->get_berat().'<br>';
    echo 'bunyinya..'.$robot2->get_suara();
// $robot1->set_suara('auuu auuu auuuuuuu'.20);
// echo 'bunyinya ...'.$robot1->get_suara().'<br>';

// $robot2->set_suara('tut tut tuttttttt');
// echo 'bunyinya ...'.$robot2->get_suara();
// echo 'suara robotnya ...'.$robot1->suara.'beratnya'.$robot1->berat;
?>