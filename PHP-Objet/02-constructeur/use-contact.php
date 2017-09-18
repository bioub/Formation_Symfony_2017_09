<?php

require_once './Contact.php';

$contact = new Contact('Romain', 'Bohdanowicz');
echo $contact->hello();

$autre = new Contact('Jean', 'Dupont');
echo $autre->hello();