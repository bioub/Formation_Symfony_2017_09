<?php

use Dreal\Entity\Contact;
use Dreal\Entity\Societe;

require_once './class/Entity/Contact.php';
require_once './class/Entity/Societe.php';

$contact = new Contact('Bill', 'Gates');
/*
 * Chainage (Fluent Setter)
$contact->setPrenom('Jean')
        ->setNom('Dupont');
*/

$societe = new Societe('Microsoft', 'Seattle');
$contact->setSociete($societe);

// HTML
echo $contact->getPrenom() . "\n";
echo $contact->getNom() . "\n";
echo $contact->getSociete()->getNom() . "\n";
