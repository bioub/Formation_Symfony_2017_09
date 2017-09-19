<?php

use Dreal\Entity\Contact;
use Dreal\Entity\Societe;

require_once './class/Entity/Contact.php';
require_once './class/Entity/Societe.php';

$societe = new Societe('Microsoft', 'Seattle');

$bill = new Contact('Bill', 'Gates');
$steve = new Contact('Steve', 'Ballmer');

$societe->addContact($bill);
$societe->addContact($steve);

// HTML
echo $societe->getNom() . "\n";
foreach ($societe->getContacts() as $ctc) {
    echo $ctc->getPrenom() . ' ' . $ctc->getNom() . "\n";
}