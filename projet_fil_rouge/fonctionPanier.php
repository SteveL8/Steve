<?php
$panier = array();

function ajouterAuPanier($plat) {
    global $panier;
    $panier[] = $plat;
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
