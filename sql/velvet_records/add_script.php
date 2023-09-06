<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Connexion à la base de données
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'steve1234');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Récupération des informations du formulaire
        $disc_title = $_POST['disc_title'];
        $disc_year = $_POST['disc_year'];
        $disc_genre = $_POST['disc_genre'];
        $disc_label = $_POST['disc_label'];
        $disc_price = $_POST['disc_price'];
        $artist_id = $_POST['artist_id'];

        // Traitement de l'uploader de fichier
        $target_dir = "pictures/";
        $target_file = $target_dir . basename($_FILES["disc_picture"]["name"]);
        move_uploaded_file($_FILES["disc_picture"]["tmp_name"], $target_file);

        // Ajout des données dans la table "disc" à l'aide d'une requête INSERT
        $insert_query = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_genre, disc_label, disc_price, artist_id, disc_picture) 
                                     VALUES (:disc_title, :disc_year, :disc_genre, :disc_label, :disc_price, :artist_id, :disc_picture)");
        $insert_query->bindParam(':disc_title', $disc_title, PDO::PARAM_STR);
        $insert_query->bindParam(':disc_year', $disc_year, PDO::PARAM_INT);
        $insert_query->bindParam(':disc_genre', $disc_genre, PDO::PARAM_STR);
        $insert_query->bindParam(':disc_label', $disc_label, PDO::PARAM_STR);
        $insert_query->bindParam(':disc_price', $disc_price, PDO::PARAM_STR);
        $insert_query->bindParam(':artist_id', $artist_id, PDO::PARAM_INT);
        $insert_query->bindParam(':disc_picture', $target_file, PDO::PARAM_STR);

        if ($insert_query->execute()) {
            // Redirection vers la page de liste
            header("Location: index.php");
            exit();
        } else {
            echo "Erreur lors de l'ajout du disque.";
        }
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "<br>";
        echo "N° : " . $e->getCode();
    }
}
?>
