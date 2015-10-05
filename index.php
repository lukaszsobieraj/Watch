<?php

include 'Timer.php';


$start = new Timer();
$begin = $start->start();
$periodOfTime = 2;
sleep($periodOfTime);
try {
    if ($periodOfTime <= 0) {
        throw new Exception();
    }
    $end = $start->stop($begin);
    echo $end;
} catch (Exception $ex) {
     echo "Be more focused";
}




