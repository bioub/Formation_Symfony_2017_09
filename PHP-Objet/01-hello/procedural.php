<?php

$prenom = 'Romain';
$nom = 'Bohdanowicz';

/**
 * Ma fonction hello
 * @param string $_prenom Le prénom
 * @param string $_nom Le nom
 * @return string Un message de présentation
 */
function hello($_prenom, $_nom) {
    return "Bonjour je m'appelle $_prenom $_nom\n";
}

echo hello($prenom, $nom);
