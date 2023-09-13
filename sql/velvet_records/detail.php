<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Détails du Disque</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        try {
            require("connexion_bdd.php");

            // Récupération de l'identifiant du disque depuis l'URL
            $disc_id = isset($_GET['disc_id']) ? $_GET['disc_id'] : null;

            if ($disc_id) {
                // Requête pour récupérer les détails du disque
                $requete = $db->prepare("SELECT disc.*, artist.artist_name FROM disc INNER JOIN artist ON disc.artist_id = artist.artist_id WHERE disc.disc_id = :disc_id");
                $requete->bindParam(':disc_id', $disc_id, PDO::PARAM_INT);
                $requete->execute();
                $disc = $requete->fetch(PDO::FETCH_ASSOC);

                if ($disc) {
        ?>
                    <h1 class='mt-4'>Détails du Disque</h1>
                    <div class='row mt-4'>
                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label>Title :</label>
                                <input type='text' class='form-control' value='<?php echo $disc['disc_title']; ?>' readonly>
                            </div>
                            <div class='form-group'>
                                <label>Year :</label>
                                <input type='text' class='form-control' value='<?php echo $disc['disc_year']; ?>' readonly>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label>Artist :</label>
                                <input type='text' class='form-control' value='<?php echo $disc['artist_name']; ?>' readonly>
                            </div>
                            <div class='form-group'>
                                <label>Année :</label>
                                <input type='text' class='form-control' value='<?php echo $disc['disc_year']; ?>' readonly>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label>Label :</label>
                                <input type='text' class='form-control' value='<?php echo $disc['disc_label']; ?>' readonly>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class='form-group'>
                                <label>Price :</label>
                                <input type='text' class='form-control' value='<?php echo $disc['disc_price']; ?>' readonly>
                            </div>
                        </div>
                    </div>
                    <img src='pictures/<?php echo $disc['disc_picture']; ?>' alt='<?php echo $disc['disc_title']; ?>' width='400'>
                    <div class='mt-4'>
                        <a href='update_form.php?disc_id=<?php echo $disc['disc_id']; ?>' class='btn btn-info mr-1'>Modifier</a>
                        <a href='delete_disc.php?disc_id=<?php echo $disc['disc_id']; ?>' class='btn btn-danger mr-1'>Supprimer</a>
                        <a href='index.php' class='btn btn-primary'>Retour</a>
                    </div>
        <?php
                } else {
                    echo "<p>Disque non trouvé.</p>";
                }
            } else {
                echo "<p>Identifiant de disque non spécifié.</p>";
            }
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage() . "<br>";
            echo "N° : " . $e->getCode();
        }
        ?>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>