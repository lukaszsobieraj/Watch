<?php

include 'Timer.php';
include 'Functions.php';


$begin = new Timer();
$start = $begin->start();;
//functionBlock
$functions = new Functions();
echo 'The used function worked for: '.$begin->stop($start).' s';
//endblock
echo 'test';
