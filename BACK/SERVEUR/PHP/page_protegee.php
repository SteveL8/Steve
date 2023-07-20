<?php
// page_protegee.php

// Démarre la session ou restaure la session existante
session_start();

// Vérifie si la variable de session auth existe et contient la valeur "ok"
if (isset($_SESSION["auth"]) && $_SESSION["auth"] === "ok") {
    echo "Bienvenue!";
} else {
    // Redirige vers la page de connexion si l'utilisateur n'est pas authentifié
    header("Location: login_form.php");
    exit();
}
?>
