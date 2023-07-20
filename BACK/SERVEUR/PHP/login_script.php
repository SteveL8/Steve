<?php

session_start();

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérifiez ici le login et le mot de passe soumis avec vos conditions
    $login = "admin";
    $mdp = "admin";

    if ($_POST["login"] === $login && $_POST["mdp"] === $mdp) {
        // Authentification réussie, initialiser la variable de session
        $_SESSION["auth"] = "ok";
        header("Location: page_protegee.php"); // Rediriger vers la page protégée
    } else {
        // Authentification échouée, détruire la variable de session
        unset($_SESSION["auth"]);
        header("Location: login_form.php"); // Rediriger vers la page de connexion
    }
}
?>
