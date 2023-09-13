<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Modifier le Disque</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        try {
            // Connexion à la base de données
            require("connexion_bdd.php");

            // Récupération de l'identifiant du disque depuis l'URL
            $disc_id = isset($_GET['disc_id']) ? $_GET['disc_id'] : null;

            if ($disc_id) {
                // Requête pour récupérer les informations du disque
                $requete = $db->prepare("SELECT disc.*, artist.artist_name FROM disc INNER JOIN artist ON disc.artist_id = artist.artist_id WHERE disc.disc_id = :disc_id");
                $requete->bindParam(':disc_id', $disc_id, PDO::PARAM_INT);
                $requete->execute();
                $disc = $requete->fetch(PDO::FETCH_ASSOC);

                if ($disc) {
        ?>
                    <h1 class='mt-4'>Modifier un vinyle </h1>
                    <form action="update_script.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="disc_id" value="<?php echo $disc_id; ?>">
                        <div class="form-group">
                            <label for="disc_title">Title </label>
                            <input type="text" class="form-control" id="disc_title" name="disc_title" value="<?php echo $disc['disc_title']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="artist_id">Artist </label>
                            <select class="form-control" id="artist_id" name="artist_id">
                                <?php
                                // Requête pour récupérer la liste des artistes
                                $artist_query = $db->query("SELECT artist_id, artist_name FROM artist");
                                $artists = $artist_query->fetchAll(PDO::FETCH_ASSOC);

                                foreach ($artists as $artist) {
                                    // Présélectionner l'artiste du disque
                                    $selected = ($artist['artist_id'] == $disc['artist_id']) ? 'selected' : '';
                                    echo "<option value='{$artist['artist_id']}' $selected>{$artist['artist_name']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="disc_year">Year </label>
                            <input type="text" class="form-control" id="disc_year" name="disc_year" value="<?php echo $disc['disc_year']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="disc_genre">Genre </label>
                            <input type="text" class="form-control" id="disc_genre" name="disc_genre" value="<?php echo $disc['disc_genre']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="disc_label">Label </label>
                            <input type="text" class="form-control" id="disc_label" name="disc_label" value="<?php echo $disc['disc_label']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="disc_price">Price </label>
                            <input type="text" class="form-control" id="disc_price" name="disc_price" value="<?php echo $disc['disc_price']; ?>">
                        </div>
                        <div class="form-group d-flex flex-column ">
                            <label for="disc_picture">Picture </label>
                            <img src="pictures/<?php echo $disc['disc_picture']; ?>" alt="<?php echo $disc['disc_title']; ?>" class="mb-3" width="200">
                            <input type="file" class="form-control-file" id="disc_picture" name="disc_picture">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-info">Enregistrer les modifications</button>
                            <a href='index.php' class='btn btn-secondary'>Annuler</a>
                        </div>
                    </form>

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