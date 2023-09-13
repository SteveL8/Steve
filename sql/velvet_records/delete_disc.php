<?php
 require("connexion_bdd.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer le Disque</title>
</head>
<body>
    <div class="container">
        <?php
        // Vérifier si le paramètre "disc_id" est présent dans l'URL
        if (isset($_GET['disc_id'])) {
            $disc_id = $_GET['disc_id'];

            // Créez une requête SQL pour supprimer le disque en fonction de disc_id
            $delete_query = $db->prepare("DELETE FROM disc WHERE disc_id = :disc_id");
            $delete_query->bindParam(':disc_id', $disc_id, PDO::PARAM_INT);

            // Exécutez la requête de suppression
            if ($delete_query->execute()) {
                // La suppression a réussi, redirigez l'utilisateur vers la page de liste par exemple
                header("Location: index.php");
                exit();
            } else {
                echo "Erreur lors de la suppression du disque.";
            }
        } else {
            echo "Identifiant de disque non spécifié.";
        }
        ?>
    </div>
    <!-- Inclure les liens vers les fichiers JavaScript ou Bootstrap si nécessaire -->
</body>
</html>
