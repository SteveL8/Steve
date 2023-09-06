<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<div class="container">
        <h1 class="mt-4">Ajouter un vinyle</h1>
        <form action="add_script.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="disc_title">Title :</label>
                <input type="text" class="form-control" id="disc_title" name="disc_title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label for="artist_id">Artist :</label>
                <select class="form-control" id="artist_id" name="artist_id" required>
                    <?php
                    // Connexion à la base de données
                    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'steve1234');
                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    // Requête pour récupérer la liste des artistes depuis la table artist
                    $requete = $db->prepare("SELECT artist_id, artist_name FROM artist");
                    $requete->execute();
                    $artists = $requete->fetchAll(PDO::FETCH_ASSOC);

                    // Boucle pour afficher les options de la liste déroulante
                    foreach ($artists as $artist) {
                        echo "<option value='{$artist['artist_id']}'>{$artist['artist_name']}</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="disc_year">Year :</label>      
                <input type="text" class="form-control" id="disc_year" name="disc_year" placeholder="Enter year" required>  
            </div>
            <div class="form-group">
                <label for="disc_genre">Genre :</label>
                <input type="text" class="form-control" id="disc_genre" name="disc_genre" placeholder="Enter genre(Rock, Pop, Prog...)" required>
            </div>    
            <div class="form-group">
                <label for="disc_label">Label :</label>
                <input type="text" class="form-control" id="disc_label" name="disc_label" placeholder="Enter label(EMI, Warner, PolyGram, Univers sale...)" required>
            </div>
            <div class="form-group">
                <label for="disc_price">Price :</label>
                <input type="text" class="form-control" id="disc_price" name="disc_price" required>
            </div>
            <div class="form-group">
                <label for="disc_picture">Picture :</label>
                <input type="file" class="form-control-file" id="disc_picture" name="disc_picture" accept=".jpg, .jpeg, .png" required>
            </div>
            <button type="submit" class="btn btn-info">Ajouter</button>
            <button type="submit" class="btn btn-info">Retour</button>
        </form>
    </div>

   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>