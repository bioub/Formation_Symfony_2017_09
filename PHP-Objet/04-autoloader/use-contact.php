<?php

require_once './autoload.php';

$contact = new Entity\Contact('Romain', 'Bohdanowicz');
//$contact->prenom = 'Thomas';
$contact->setPrenom('Thomas');
echo $contact->hello();

$autre = new Entity\Contact('Jean', 'Dupont');
echo $autre->hello();