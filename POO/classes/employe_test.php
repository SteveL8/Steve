<?php
require('magasin_jarditou.class.php');
require('employe_jarditou.class.php');

/*Exemple d'instance pour calculer depuis combien de temps l'employe est dans l'entrprise
$employe1 = new Employe("Doe", "John", "2012-05-15", "Manager", 50, "Comptabilité");
$anneesDansEntreprise = $employe1->getAnneesEntreprise();
echo "John Doe travaille dans l'entreprise depuis " . $anneesDansEntreprise . " ans.";*/


// Création d'employés avec des informations différentes
/*$employe1 = new Employe("Doe", "John", "2010-11-30", "Manager", 50, "Comptabilité");
$employe2 = new Employe("Smith", "Alice", "2015-12-11", "Ingénieur", 60, "Informatique");
$employe3 = new Employe("Johnson", "Bob", "2005-09-20", "Directeur", 80, "Direction");
$employe4 = new Employe("Brown", "Emily", "2018-08-05", "Analyste", 55, "Finance");
$employe5 = new Employe("Wilson", "David", "2000-11-30", "Chef de projet", 70, "Informatique");

// Liste des employés
$employes = [$employe1, $employe2, $employe3, $employe4, $employe5];

// Vérification et versement de la prime pour chaque employé
foreach ($employes as $employe) {
    echo "{$employe->getPrenom()} {$employe->getNom()}\n";
    $employe->verserPrimeSiDateValide();
    echo "-----------\n";
}*/
//Création de 3 objet 'magasin' avec leurs attributs 
$magasin1 = new Magasin("Magasin A", "123 Rue de la République", "75001", "Paris", "Restaurant d'entreprise");
$magasin2 = new Magasin("Magasin B", "456 Avenue des Champs-Élysées", "75008", "Paris", "Restaurant d'entreprise");
$magasin3 = new Magasin("Magasin C", "789 Boulevard Saint-Michel", "75005", "Paris", "Tickets restaurants");
//Pareil que les magasin création de 3 objet 'employe' avec leurs attributs
$employe1 = new Employe("Doe", "John", "2010-11-30", "Manager", 50, "Comptabilité", $magasin1);
$employe1->ajouterEnfants("Alice", 8);
$employe1->ajouterEnfants("Bob", 14);
$employe2 = new Employe("Smith", "Alice", "2015-12-11", "Ingénieur", 60, "Informatique", $magasin2);
$employe2->ajouterEnfants("Eve", 5);
$employe3 = new Employe("Johnson", "Bob", "2005-09-20", "Directeur", 80, "Direction", $magasin3);
$employe3->ajouterEnfants("Charlie", 17);
//Création d'un tableau avec les objet employe créer au-dessus pour les gêrer plus facilement
$employes = [$employe1, $employe2, $employe3];/* 

foreach ($employes as $employe) {
    echo "{$employe->getPrenom()} {$employe->getNom()} travaille dans le magasin {$employe->getMagasin()->getNom()}.\n";
    echo "Mode de restauration : {$employe->getMagasin()->getModeRestauration()}\n";
    echo "-----------\n";
}*/

/*employe1 = new Employe("Doe", "John", "2010-11-30", "Manager", 50, "Comptabilité", $magasin1);
//Utilisation de la méthode 'EligibleCeques'
if ($employe1->EligibleCheques()) {
    echo "{$employe1->getPrenom()} {$employe1->getNom()} est éligible aux chèques-vacances.\n";
} else {
    echo "{$employe1->getPrenom()} {$employe1->getNom()} n'est pas éligible aux chèques-vacances.\n";
}*/


foreach($employes as $employe) {
    echo "{$employe->getPrenom()} {$employe->getNom()} est éligible aux chèques de Noël : {$employe->chequenoel()["éligible"]}\n";
    $cheque = $employe->chequenoel()["cheque"];
    foreach($cheque as $montant => $nombre) {
        if($nombre > 0) {
             echo "$nombre chèque de $montant\n";
        }
    }
    echo "--------------------\n";
}
?>
