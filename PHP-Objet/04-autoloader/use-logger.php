<?php

require_once './autoload.php';

/*
function logline($fic, $msg) {
    fwrite($fic, date('d/m/Y H:i:s') . " - $msg\n");
} 

$fic = fopen('app.log', 'a');
logline($fic, 'Ligne 1');
logline($fic, 'Ligne 2');
logline($fic, 'Ligne 3');
fclose($fic);
*/

$logger = new Util\Logger('app.log');
$logger->write('Ligne 1');
$logger->write('Ligne 2');
$logger->write('Ligne 3');