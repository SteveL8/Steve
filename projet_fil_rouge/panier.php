<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Panier</title>
</head>

<body>
    <?php
    session_start();
    require('connexion_db.php');
    require('header.php');
    require('fonctionPanier.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['plat_id'])) {
        $plat_id = $_POST['plat_id'];
        $plat_libelle = $_POST['plat_libelle'];
        $plat_prix = $_POST['plat_prix'];
        $plat_image = $_POST['plat_image'];

        // Créez un tableau pour représenter le plat
        $plat = array(
            'id' => $plat_id,
            'libelle' => $plat_libelle,
            'prix' => $plat_prix,
            'quantite' => 1,
            'image' => $plat_image,
        );

        // Ajoutez le plat au panier en utilisant la fonction ajouterAuPanier()
        ajouterAuPanier($plat);
    }

    // Vérifiez si le panier contient des éléments
    if (!empty($_SESSION['panier'])) {
        $panier = $_SESSION['panier'];
    } else {
        $panier = array();
    }
    ?>

    <div class="container">
        <?php
        if (!empty($panier)) {
        ?>
            <h1>Votre Panier</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom du Plat</th>
                        <th>Image</th>
                        <th>Prix Unitaire</th>
                        <th>Quantité</th>
                        <th>Prix Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($panier as $index => $plat) {
                    ?>
                        <tr>
                            <td><?= $plat['libelle'] ?></td>
                            <td><img src="<?= $plat['image'] ?>" alt="<?= $plat['libelle'] ?>" width="100"></td>
                            <td><?= $plat['prix'] ?> €</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-text">Quantité</span>
                                    <input type="number" class="form-control" value="<?= $plat['quantite'] ?>" min="1" max="20">
                                </div>
                            </td>
                            <td><?= $plat['prix'] * $plat['quantite'] ?> €</td>
                            <td>
                                <form action="supprimer_plat.php" method="post">
                                    <input type="hidden" name="index" value="<?= $index ?>">
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

            <p>Total : <?= calculTotal() ?> €</p>
        <?php
        } else {
            echo "<p>Votre panier est vide.</p>";
        }
        ?>
    </div>

    <?php
    require("footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>