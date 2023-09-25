<?php
//Declaration de la classe "Personnage" et de ces attributs.
class Personnage {
    //'$nom', '$prenom', '$age', '$sexe', sont les propriétés de chaque objet'Personnage.
    //Avec le mot-clés'private' les attributs ne sont sont accessibles que depuis l'interieur de la classe.      
    private $nom;
    private $prenom;
    private $age;                                                                      //Ici l'encapsulation est  le mot-clés'private'
    private $sexe;                                                                     //DÉFINITION : l'encapsulation est l'un des principes fondamentaux de la POO. 
    //Le constructeur est une méthode spéciale appelée automatiquement lorsqu'un       //Il consiste à restreindre l'accès à certains éléments d'une classe (le plus souvent ses attributs). 
    //nouvel objet est crée à partir de la class.I prend en paramètre les valeurs      //L'objectif de l'encapsulation est de ne laisser accessible que le strict nécessaire pour que la classe soit utilisable.
    //initiales pour les attributs du personnage et les assigne aux attributs
    //de l'objet en utilisant les méthodes 'set'.                                                                                  
    public function __construct($nom, $prenom, $age, $sexe) {                          
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setSexe($sexe);

    }
//Chaque attributs avec la méthodes 'get' permet d'obetenir la valeur de l'attribut depuis l'extérieur de la classe.
//Comme ces méthodes sont publiques sa signifie qu'elles peuvent être appelées depuis n'importe où.
    public function getNom() {
        return $this->nom;
    }
//Ici avec la méthodes 'set' permet de definir la valeur de l'attribut depuis l'exterieur des la classe.Méthodes publique aussi.
    public function setNom($nom) {
         $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getSexe() {
        return $this->sexe;
    }

    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }
    
}
//Création d'une nouvelle instance de la classe 'Personnage'.Les valeurs "Lefort"(nom), "Steve"(prenom), 27(âge), "Masculin"(sexe) sont les valeurs de '$personnage'.
//$personnage = new Personnage("Lefort", "Steve", 27, "Masculin");
//Exemple d'accés aux attribut à l'aide des accesseurs('getters).
    //echo $personnage->getNom();
    //echo $personnage->getAge();
