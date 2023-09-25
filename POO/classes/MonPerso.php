<?php
require('Personnage.class.php');

//J'ai une erreur quand je me base sur le modele donné dans l'exercice.
/*$p = new Personnage();
$p->setNom("Lebowski");
$p->setPrenom("Jeff");

echo ($p);*/

//Création d'un nouveau personnage en utiliant le conducteur
$personnage = new Personnage("Lebowski", "Jeff", 0, "Masculin");
//Utilisation de l'objet '$personnage" ici avec on affiche le nom et le prénom
echo "Nom : " .$personnage->getNom() . " Prénom : " . $personnage->getPrenom();
?>