<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Liste des disques</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row mt-2 mb-4">
            <div class="col-md-6">
                <h1 class="mt-0">
                    <?php
                   try {
                     // Connexion à la base de données via "require"
                        require("connexion_bdd.php");
                        // Requête pour compter le nombre de disques
                        $count_query = $db->query("SELECT COUNT(*) as count FROM disc");
                        $count = $count_query->fetch(PDO::FETCH_ASSOC)['count'];

                        // Affichage du nombre de disques
                        echo "Liste des disques ($count)";
                    } catch (Exception $e) {
                        echo "Erreur : " . $e->getMessage() . "<br>";
                        echo "N° : " . $e->getCode();
                    }
                    ?>
                </h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="add_form.php" class="btn btn-info">Ajouter</a>
            </div>
        </div>

        <div class="row">
            <?php
            try {
                // Requête pour récupérer les disques et les artistes correspondants
                $requete = $db->prepare("SELECT disc.*, artist.artist_name FROM disc INNER JOIN artist ON disc.artist_id = artist.artist_id");
                $requete->execute();
                $discs = $requete->fetchAll(PDO::FETCH_ASSOC);

                // Boucle pour afficher chaque disque
                foreach ($discs as $disc) {
            ?>
                    <div class='col-md-6 mb-4'>
                        <div class='media'>
                            <img src='pictures/<?php echo $disc['disc_picture']; ?>' class='align-self-start mr-3' alt='<?php echo $disc['disc_title']; ?>' width='300'>
                            <div class='media-body'>
                                <h5 class='mt-0'><strong><?php echo $disc['disc_title']; ?></strong></h5>
                                <p><strong><?php echo $disc['artist_name']; ?></strong></p>
                                <p><strong>Label : </strong><?php echo $disc['disc_label']; ?></p>
                                <p><strong>Année : </strong><?php echo $disc['disc_year']; ?></p>
                                <p><strong>Genre : </strong><?php echo $disc['disc_genre']; ?></p>
                                <a href='detail.php?disc_id=<?php echo $disc['disc_id']; ?>' class='btn btn-info'>Détails</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } catch (Exception $e) {
                echo "Erreur : " . $e->getMessage() . "<br>";
                echo "N° : " . $e->getCode();
            }
            ?>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
