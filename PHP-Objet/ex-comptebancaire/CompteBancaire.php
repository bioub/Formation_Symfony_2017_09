<?php


class CompteBancaire {
    protected $proprietaire;
    protected $solde;
    protected $type;
    
    public function __construct($proprietaire, $solde, $type) {
        $this->proprietaire = $proprietaire;
        $this->solde = $solde;
        $this->type = $type;
    }

    public function getProprietaire() {
        return $this->proprietaire;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function getType() {
        return $this->type;
    }

    public function setProprietaire($proprietaire) {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function crediter($montant) {
        $this->solde = $this->solde + $montant;
    }
    
    public function debiter($montant) {
        $this->solde = $this->solde - $montant;
    }

}
