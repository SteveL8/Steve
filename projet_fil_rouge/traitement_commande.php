<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require('connexion_db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Effectuez les opérations de base de données
    $idPlat = $_SESSION['panier'][0]['id'];
    $quantite = $_SESSION['panier'][0]['quantite'];
    
    // Inclure le fichier de fonctions
    require('fonctionPanier.php');
    
    // Assurez-vous que les fonctions sont incluses pour pouvoir utiliser calculTotal
    $total = calculTotal();
    $dateCommande = date('Y-m-d');
    $etat = 'En attente';
    $nomClient = $_POST['nomEtPrenom'];
    $telephoneClient = $_POST['tel'];
    $emailClient = $_POST['mail'];
    $adresseClient = $_POST['adresse']; 

    // Insérer les détails de la commande dans la base de données
    try {
        $query = "INSERT INTO commande (id_plat, quantite, total, date_commande, etat, nom_client, telephone_client, email_client, adresse_client) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$idPlat, $quantite, $total, $dateCommande, $etat, $nomClient, $telephoneClient, $emailClient, $adresseClient]);

        // Après avoir inséré les détails de la commande, envoyez l'e-mail de confirmation
        require('mail.commande.php.php');

        // Destruction de la session du panier
        unset($_SESSION['panier']);

        // Après avoir traité la commande avec succès
        $message_confirmation = "Votre commande a été confirmée avec succès.";

        // Rediriger l'utilisateur vers la page d'accueil après quelques secondes
        header("refresh:5;url=index.php");
    } catch (PDOException $e) {
        echo "Erreur de base de données : " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Confirmation de commande</title>
    
    <style>
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="popup">
            <p><?php echo $message_confirmation; ?></p>
            <a href="index.php">Retour à l'accueil</a>
        </div>
    </div>
</body>

</html>
