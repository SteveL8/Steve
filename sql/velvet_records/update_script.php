<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Connexion à la base de données
        require("connexion_bdd.php");

        // Récupération des données du formulaire
        $disc_id = isset($_POST['disc_id']) ? $_POST['disc_id'] : null;
        $disc_title = isset($_POST['disc_title']) ? $_POST['disc_title'] : '';
        $artist_id = isset($_POST['artist_id']) ? $_POST['artist_id'] : '';
        $disc_year = isset($_POST['disc_year']) ? $_POST['disc_year'] : '';
        $disc_genre = isset($_POST['disc_genre']) ? $_POST['disc_genre'] : '';
        $disc_label = isset($_POST['disc_label']) ? $_POST['disc_label'] : '';
        $disc_price = isset($_POST['disc_price']) ? $_POST['disc_price'] : '';

        // Vérification que le disque existe
        $check_query = $db->prepare("SELECT * FROM disc WHERE disc_id = :disc_id");
        $check_query->bindParam(':disc_id', $disc_id, PDO::PARAM_INT);
        $check_query->execute();
        $existing_disc = $check_query->fetch(PDO::FETCH_ASSOC);

        if ($existing_disc) {
            // Requête pour mettre à jour les informations du disque
            $update_query = $db->prepare("UPDATE disc SET disc_title = :disc_title, artist_id = :artist_id, disc_year = :disc_year, disc_genre = :disc_genre, disc_label = :disc_label, disc_price = :disc_price WHERE disc_id = :disc_id");
            $update_query->bindParam(':disc_title', $disc_title, PDO::PARAM_STR);
            $update_query->bindParam(':artist_id', $artist_id, PDO::PARAM_INT);
            $update_query->bindParam(':disc_year', $disc_year, PDO::PARAM_INT);
            $update_query->bindParam(':disc_genre', $disc_genre, PDO::PARAM_STR);
            $update_query->bindParam(':disc_label', $disc_label, PDO::PARAM_STR);
            $update_query->bindParam(':disc_price', $disc_price, PDO::PARAM_STR);
            $update_query->bindParam(':disc_id', $disc_id, PDO::PARAM_INT);

            if ($update_query->execute()) {
                // Vérification si une nouvelle image a été téléchargée
                if ($_FILES['disc_picture']['error'] === 0) {
                    $file_name = $_FILES['disc_picture']['name'];
                    $file_tmp = $_FILES['disc_picture']['tmp_name'];

                    // Définir le dossier d'enregistrement des images téléchargées
                    $upload_dir = "pictures/";

                    // Déplacer l'image téléchargée vers le dossier d'enregistrement
                    if (move_uploaded_file($file_tmp, $upload_dir . $file_name)) {
                        // Requête pour mettre à jour le champ disc_picture dans la base de données
                        $update_picture_query = $db->prepare("UPDATE disc SET disc_picture = :disc_picture WHERE disc_id = :disc_id");
                        $update_picture_query->bindParam(':disc_picture', $file_name, PDO::PARAM_STR);
                        $update_picture_query->bindParam(':disc_id', $disc_id, PDO::PARAM_INT);
                        $update_picture_query->execute();
                    } else {
                        echo "Erreur lors du téléchargement de l'image.";
                    }
                }

                // Redirection vers la page de liste
                header("Location: index.php");
                exit();
            } else {
                echo "Erreur lors de la mise à jour du disque.";
            }
        } else {
            echo "Disque non trouvé.";
        }
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
    }
}
?>


