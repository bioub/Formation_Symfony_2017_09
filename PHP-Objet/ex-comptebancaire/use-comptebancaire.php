<?php

// Créer la class CompteBancaire pour
// que le code suivant fonctionne

// TDD : Test Driven Development
// On écrit le test en premier, ce qui
// en général pousse à l'architecture la
// plus simple possible

require_once './CompteBancaire.php';

// 3 paramètres : proprietaire, solde, type
$bnp = new CompteBancaire('Jean Dupont', 2000, 'Livret A');
// Générer tous les getters/setters
echo $bnp->getSolde() . "\n"; // 2000

$bnp->crediter(1000);
echo $bnp->getSolde() . "\n"; // 3000

$bnp->debiter(500);
echo $bnp->getSolde() . "\n"; // 2500

// supprimer setSolde

