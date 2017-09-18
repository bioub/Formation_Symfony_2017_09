<?php

$contact = [
    'prenom' => 'Romain',
    'nom' => 'Bohdanowicz',
];

/**
 * Ma fonction hello
 * @param array $_contact Le contact
 * @return string Un message de présentation
 */
function hello($_contact) {
    return "Bonjour je m'appelle $_contact[prenom] $_contact[nom]\n";
}

echo hello($contact);
