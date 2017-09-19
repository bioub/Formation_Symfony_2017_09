<?php

namespace Dreal\Entity;
 
class Societe {
    protected $nom;
    protected $ville;
    
    /** @var Contact[] */
    protected $contacts = [];
    
    public function __construct($nom, $ville) {
        $this->nom = $nom;
        $this->ville = $ville;
    }
    
    public function addContact(Contact $contact) {
        $this->contacts[] = $contact;
    }
    
    public function getContacts(): array {
        return $this->contacts;
    }

        
    public function getNom() {
        return $this->nom;
    }

    public function getVille() {
        return $this->ville;
    }

    public function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    public function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }


}
