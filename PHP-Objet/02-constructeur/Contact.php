<?php

class Contact {
    public $prenom;
    public $nom;
    
    public function __construct($prenom, $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
    }
    
    /**
     * Ma fonction hello
     * @param array $_contact Le contact
     * @return string Un message de présentation
     */
    public function hello() {
        return "Bonjour je m'appelle $this->prenom $this->nom\n";
    }
}