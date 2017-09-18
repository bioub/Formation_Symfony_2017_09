<?php

class Contact {
    protected $prenom;
    protected $nom;
    
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
    
    public function getPrenom() {
        return $this->prenom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
        return $this;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }


}