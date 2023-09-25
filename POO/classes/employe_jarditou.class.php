<?php
class employe
{
    private $nom;
    private $prenom;
    private $date;
    private $poste;
    private $salaire;
    private $service;
    private $magasin;
    private $enfants = [];


    public function __construct($nom, $prenom, $date, $poste, $salaire, $service, $magasin)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setDate($date);
        $this->setPoste($poste);
        $this->setSalaire($salaire);
        $this->setService($service);
        $this->setMagasin($magasin);
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getDate()
    {
        return $this->date;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }


    public function getPoste()
    {
        return $this->poste;
    }
    public function setPoste($poste)
    {
        $this->poste = $poste;
    }


    public function getSalaire()
    {
        return $this->salaire;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }


    public function getService()
    {
        return $this->service;
    }
    public function setService($service)
    {
        $this->service = $service;
    }


    public function getMagasin()
    {
        return $this->magasin;
    }
    public function setMagasin($magasin)
    {
        $this->magasin = $magasin;
    }


    public function getAnneesEntreprise()
    {
        //Crée un nouvel objet DateTime avec "$date" vers "date cela nous permet de manipuler les date plus facilement 
        $date = new DateTime($this->date);
        //Création d'un autre objet DataTime pour la date actelle
        $dateActuelle = new DateTime();
        //Utilisation de la méthode 'diff' pour calculer la différence en la date d'embauche($date) et la date actuelle 
        $diff = $date->diff($dateActuelle);
        //retourne le nobre d'années contenu dans la difference en utilisant la proprieté '$diff->'
        return $diff->y;
    }


    public function calculPrimeAnnuelle()
    {
        //Calcul de la prime basée sur 5% du salaire
        $primeSalaire = 0.05 * $this->salaire;

        //Obtention du nombre d'années d'ancienneté de l'employé en utilisant la méthode 'getAnneesEntreprise()'
        $anneesAnciennete = $this->getAnneesEntreprise();
        //Calcul de la prime d'ancienneté basée sur 2% du salaire par année d'ancienneté
        $primeAnciennete = ($anneesAnciennete * 0.02) * $this->salaire;
        //Calcul du montant total de la prime en additionnant la prime basée sur la salaire et la prime d'ancienneté
        $primeTotale = $primeSalaire + $primeAnciennete;
        //Retourne le montant total de la prime
        return $primeTotale;
    }


    public function verserPrimeSiDateValide()
    {
        //Création d'un objet 'DateTime' pour obtenir la date actuelle 
        $dateActuelle = new DateTime();
        //Définition du jour et du mois du versement de la prime (20 septembre date au moment ou j'écris le code)
        $jourVersement = 20;
        $moisVersement = 9;
        //Vérification si la date acttuelle correspod au jour et au mois du versement de la prime 
        if ($dateActuelle->format('d') == $jourVersement && $dateActuelle->format('m') == $moisVersement) {

            //Si c'est le jour du versement, calcule la prime annuelle en utilisant la méthode 'calculPrimeAnnuelle()'
            $primeAnnuelle = $this->calculPrimeAnnuelle();



            echo "Ordre de transfert de la {$primeAnnuelle} K euros vers la banque.\n";
        } else {

            echo "Ce n'est pas le jour du versement de la prime.\n";
        }
    }
    public function EligibleCheques() {
        //Utilisation de la méthode 'getAnneesEntreprise'pour obtenir le nombre d'années d'ancienneté de l'employé.
        $anciennete = $this->getAnneesEntreprise();
        //Verification si l'ancienneté est d'au moins 1an
        if($anciennete>=1) {
            return true;
        } else {
            return false;
        }
    }

    //Permet d'ajouter des enfants a la liste de l'employé 
    public function ajouterEnfants($nom, $age) {
        $this->enfants[] = ["nom" => $nom, "age" => $age];
    }
    

    //Méthode qui calcul si l'employé est éligible a recvoir des chéque de Noël pour ses enfants.Ont initialise un tableau "$cheque" avec 3 somme differente en fonction des âge.
    public function chequenoel() {

        $cheque = ["20€" => 0, "30€" => 0, "50€" => 0];

        foreach ($this->enfants as $enfant ) {
            $age = $enfant["age"];
          if($age >= 0 && $age <= 10) {
                $cheque["20€"]++;
          } elseif($age >= 11 && $age <= 15) {
                $cheque["30€"]++;
          }elseif($age >= 16 && $age <= 18) {
                $cheque["50€"]++;
          }
            
        }

        if(array_sum($cheque) > 0) {
            return["éligible" => "oui", "cheque" => $cheque];
        }else {
            return["éligible" => "non"];
        }
    }
}
?>
