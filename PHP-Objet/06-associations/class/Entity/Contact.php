<?php

namespace Dreal\Entity;

class Contact {
    protected $prenom;
    protected $nom;
    
    /** @var Societe */
    protected $societe;
    
    public function __construct($prenom, $nom) {
        $this->prenom = $prenom;
        $this->nom = $nom;
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

    public function getSociete(): Societe {
        return $this->societe;
    }

    public function setSociete(Societe $societe) {
        $this->societe = $societe;
        return $this;
    }



}
