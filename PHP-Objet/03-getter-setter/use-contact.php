<?php

require_once './Contact.php';

$contact = new Contact('Romain', 'Bohdanowicz');
//$contact->prenom = 'Thomas';
$contact->setPrenom('Thomas');
echo $contact->hello();

$autre = new Contact('Jean', 'Dupont');
echo $autre->hello();