<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Panier</title>
</head>

<body class="d-flex flex-column min-vh-100">
    <?php
    session_start();

    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }

    require('connexion_db.php');
    require('header.php');
    require('fonctionPanier.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['plat_id'])) {
        $plat_id = $_POST['plat_id'];
        $plat_libelle = $_POST['plat_libelle'];
        $plat_prix = $_POST['plat_prix'];
        $plat_image = $_POST['plat_image'];
        $quantite = isset($_POST['quantite_' . $plat_id]) ? (int)$_POST['quantite_' . $plat_id] : 1;

        $plat = array(
            'id' => $plat_id,
            'nom' => $plat_libelle,
            'prix' => $plat_prix,
            'quantite' => $quantite,
            'image' => $plat_image,
        );
        $_SESSION['panier'][] = $plat;
    }

    if (isset($_SESSION['panier']) && !empty($_SESSION['panier'])) {
        $panier = $_SESSION['panier'];
    } else {
        $panier = array();
    }
    ?>

    <div class="container-">
        <div class="row">
            <div class="col">
                <img src="img/twitter_header_photo_2.png" class="img-fluid object-fit-cover" alt="Banniere" title="Banniere" id="banniere">
            </div>
        </div>
    </div>
    <?php

    if (!empty($panier)) {
    ?>

        <div class="container flex-grow-1">
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
                            <td><?= $plat['nom'] ?></td>
                            <td><img src="<?= $plat['image'] ?>" alt="<?= $plat['nom'] ?>" width="100"></td>
                            <td><?= $plat['prix'] ?> €</td>
                            <td><?= $plat['quantite'] ?></td>
                            <td><?= $plat['prix'] * $plat['quantite'] ?> €</td>
                            <td>
                                <form action="supprimePanier.php" method="post">
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
            <a href="commande.php" class="btn btn-primary">Passer la commande</a>
            <p class="text-end fs-4">Total : <?= calculTotal() ?> €</p>
        </div>

    <?php
    } else {
        echo "<div class='container'>Votre panier est vide.</div>";
    }
    require("footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>