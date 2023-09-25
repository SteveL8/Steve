<?php
class magasin {
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $modeRestauration;

    public function __construct($nom, $adresse, $codePostal, $ville, $modeRestauration) {
        $this->setNom($nom);
        $this->setAdresse($adresse);
        $this->setCodePostal($codePostal);
        $this->setVille($ville);
        $this->setModeRestauration($modeRestauration);

    }


    public function getNom() {
        return $this->nom;
    }
    public function setNom($nom) {
         $this->nom = $nom;
    }


    public function getAdresse() {
        return $this->adresse;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }


    public function getCodePostal() {
        return $this->codePostal;
    }
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }


    public function getVille() {
        return $this->ville;
    }
    public function setVille($ville) {
        $this->ville = $ville;
    }


    public function getModeRestauration() {
        return $this->modeRestauration;
    }
    public function setModeRestauration($modeRestauration) {
        $this->modeRestauration = $modeRestauration;
    }
}
?>
