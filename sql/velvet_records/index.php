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
                <h1 class="mt-0">Liste des disques (15)</h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="add_form.php" class="btn btn-info">Ajouter</a>
            </div>
        </div>

        <div class="row">
            <?php
            //'try {...} catch (Exeption $e) {...}' Bloc PHP qui gère les erreurs potetielles de la base de données.
            try {
                $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'steve1234');
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $requete = $db->prepare("SELECT disc.*, artist.artist_name FROM disc INNER JOIN artist ON disc.artist_id = artist.artist_id");
                $requete->execute();
                $discs = $requete->fetchAll(PDO::FETCH_ASSOC);

                foreach ($discs as $disc) {
                    echo "<div class='col-md-6 mb-4'>";
                    echo "<div class='media'>";
                    echo "<img src='pictures/{$disc['disc_picture']}' class='align-self-start mr-3' alt='{$disc['disc_title']}' width='300'>";
                    echo "<div class='media-body'>";
                    echo "<h5 class='mt-0'><strong>{$disc['disc_title']}</strong></h5>";
                    echo "<p><strong> {$disc['artist_name']}</strong></p>";
                    echo "<p><strong>Label : </strong>{$disc['disc_label']}</p>";
                    echo "<p><strong>Année : </strong>{$disc['disc_year']}</p>";
                    echo "<p><strong>Genre : </strong>{$disc['disc_genre']}</p>";
                    echo "<a href='detail_disc.php?disc_id={$disc['disc_id']}' class='btn btn-info'>Détails</a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
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