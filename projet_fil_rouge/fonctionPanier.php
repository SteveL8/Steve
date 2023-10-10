<?php
$panier = array();

function ajouterAuPanier($plat) {
    global $panier;
    $panier[] = $plat;
}

function supprimerDuPanier($index) {
    global $panier;
    if (isset($panier[$index])) {
        unset($panier[$index]);
    }
}

function calculTotal(){
    global $panier;
    $total = 0;
    foreach ($panier as $plat) {
        $total += $plat['prix'] * $plat['quantite'];
    }
    return $total;
}
?>
