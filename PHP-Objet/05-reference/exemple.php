<?php

$p1 = 'Jean';
$p2 = $p1;
$p2 = 'Eric';
echo $p1 . "\n"; // Jean

$o1 = new stdClass();
$o1->p = 'Jean';
$o2 = $o1;
$o2->p = 'Eric';
echo $o1->p . "\n"; // Eric
