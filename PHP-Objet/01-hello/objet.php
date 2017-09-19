<?php

class Contact {
    public $prenom = 'Romain';
    public $nom = 'Bohdanowicz';
    
    /**
     * Ma fonction hello
     * @param array $_contact Le contact
     * @return string Un message de présentation
     */
    function hello() {
        return "Bonjour je m'appelle $this->prenom $this->nom\n";
    }
}

$contact = new Contact;
$contact->prenom = 'Thomas';
echo $contact->hello();
