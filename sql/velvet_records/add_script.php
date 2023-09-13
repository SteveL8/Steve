<?php
//Verification de la méthode de requête
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        require("connexion_bdd.php");
        echo "ugbvreiu";

        // Récupération des informations du formulaire
        $disc_title = $_POST['disc_title'];
        $disc_year = $_POST['disc_year'];
        $disc_genre = $_POST['disc_genre'];
        $disc_label = $_POST['disc_label'];
        $disc_price = $_POST['disc_price'];
        $artist_id = $_POST['artist_id']; 
        echo "$disc_price";

        // Traitement de l'uploader de fichier
        
        if(isset($_FILES["disc_picture"]) ) {
            echo "image ajouter";
            $file_name = $_FILES["disc_picture"]["name"];
            $file_tmp = $_FILES["disc_picture"]["tmp_name"];
            echo "$file_name";
        }   
        else {
            echo "Vide";
        }
       //Définir le dossier d'enrigistrement des images téléchargées
       $upload_dir = "pictures/";
       //Déplacer les images téléchager au dossier d'enregistrement
       if (move_uploaded_file($file_tmp,$upload_dir.$file_name)) {
        echo "L'image a bien été télécharger et enregistrés";
       }
       else {
        echo "Erreur lors du téléchargement de l'image";
       }
        
        


        // Ajout des données dans la table "disc" à l'aide d'une requête INSERT
        $insert_query = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_genre, disc_label, disc_price, artist_id, disc_picture) 
                                     VALUES (:disc_title, :disc_year, :disc_genre, :disc_label, :disc_price, :artist_id, :disc_picture)");
        $insert_query->bindParam(':disc_title', $disc_title, PDO::PARAM_STR);
        $insert_query->bindParam(':disc_year', $disc_year, PDO::PARAM_INT);
        $insert_query->bindParam(':disc_genre', $disc_genre, PDO::PARAM_STR);
        $insert_query->bindParam(':disc_label', $disc_label, PDO::PARAM_STR);
        $insert_query->bindParam(':disc_price', $disc_price, PDO::PARAM_STR);
        $insert_query->bindParam(':artist_id', $artist_id, PDO::PARAM_INT);
        $insert_query->bindParam(':disc_picture', $file_name, PDO::PARAM_STR);
        

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
